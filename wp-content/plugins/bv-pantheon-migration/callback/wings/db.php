<?php

if (!defined('ABSPATH')) exit;
if (!class_exists('BVDBCallback')) :
class BVDBCallback {
	public function tableInfo($table, $tname, $rcount, $offset = 0, $limit = 0, $bsize = 512, $filter = "") {
		global $bvcb, $bvresp;
		$tinfo = array();
		$data =array();
		$rows_count = $bvcb->bvmain->db->rowsCount($table);
		$bvresp->addStatus('count', $rows_count);
		if ($limit == 0) {
			$limit = $rows_count;
		}
		$srows = 1;
		while (($limit > 0) && ($srows > 0)) {
			if ($bsize > $limit)
				$bsize = $limit;
			$rows = $bvcb->bvmain->db->getTableContent($table, '*', $filter, $bsize, $offset);
			$srows = sizeof($rows);
			$data = array();
			$data["table"] = $table;
			$data["offset"] = $offset;
			$data["size"] = $srows;
			$data["md5"] = md5(serialize($rows));
			array_push($tinfo, $data);
			$offset += $srows;
			$limit -= $srows;
		}
		$bvresp->addStatus('tinfo', $tinfo);
	}

	public function uploadRows($table, $tname, $rcount, $offset = 0, $limit = 0, $bsize = 512, $filter = "") {
		global $bvresp, $bvcb;
		
		$rows_count = $bvcb->bvmain->db->rowsCount($table);
		if ($limit == 0) {
			$limit = $rows_count;
		}
		$bvresp->addStatus('count', $rows_count);
		$srows = 1;
		while (($limit > 0) && ($srows > 0)) {
			if ($bsize > $limit)
				$bsize = $limit;
			$rows = $bvcb->bvmain->db->getTableContent($table, '*', $filter, $bsize, $offset);
			$srows = sizeof($rows);
			$data = array();
			$data["offset"] = $offset;
			$data["size"] = $srows;
			$data["rows"] = $rows;
			$data["md5"] = md5(serialize($rows));
			$str = serialize($data);
			$bvresp->writeStream($str);
			$offset += $srows;
			$limit -= $srows;
		}
	}

	public function process($method) {
		global $bvresp, $bvcb;
		$db = $bvcb->bvmain->db;
		switch ($method) {
		case "gettbls":
			$bvresp->addStatus("tables", $db->showTables());
			break;
		case "tblstatus":
			$bvresp->addStatus("statuses", $db->showTableStatus());
			break;
		case "tablekeys":
			$table = urldecode($_REQUEST['table']);
			$bvresp->addStatus("table_keys", $db->tableKeys($table));
			break;
		case "describetable":
			$table = urldecode($_REQUEST['table']);
			$bvresp->addStatus("table_description", $db->describeTable($table));
			break;
		case "checktable":
			$table = urldecode($_REQUEST['table']);
			$type = urldecode($_REQUEST['type']);
			$bvresp->addStatus("status", $db->checkTable($table, $type));
			break;
		case "repairtable":
			$table = urldecode($_REQUEST['table']);
			$bvresp->addStatus("status", $db->repairTable($table));
			break;
		case "gettcrt":
			$table = urldecode($_REQUEST['table']);
			$bvresp->addStatus("create", $db->showTableCreate($table));
			break;
		case "getrowscount":
			$table = urldecode($_REQUEST['table']);
			$bvresp->addStatus("count", $db->rowsCount($table));
			break;
		case "gettablecontent":
			$table = urldecode($_REQUEST['table']);
			$fields = urldecode($_REQUEST['fields']);
			$filter = (array_key_exists('filter', $_REQUEST)) ? urldecode($_REQUEST['filter']) : "";
			$limit = intval(urldecode($_REQUEST['limit']));
			$offset = intval(urldecode($_REQUEST['offset']));
			$bvresp->addStatus("rows", $db->getTableContent($table, $fields, $filter, $limit, $offset));
			break;
		case "tableinfo":
			$table = urldecode($_REQUEST['table']);
			$offset = intval(urldecode($_REQUEST['offset']));
			$limit = intval(urldecode($_REQUEST['limit']));
			$bsize = intval(urldecode($_REQUEST['bsize']));
			$filter = (array_key_exists('filter', $_REQUEST)) ? urldecode($_REQUEST['filter']) : "";
			$rcount = intval(urldecode($_REQUEST['rcount']));
			$tname = urldecode($_REQUEST['tname']);
			$this->tableInfo($table, $tname, $rcount, $offset, $limit, $bsize, $filter);
			break;
		case "uploadrows":
			$table = urldecode($_REQUEST['table']);
			$offset = intval(urldecode($_REQUEST['offset']));
			$limit = intval(urldecode($_REQUEST['limit']));
			$bsize = intval(urldecode($_REQUEST['bsize']));
			$filter = (array_key_exists('filter', $_REQUEST)) ? urldecode($_REQUEST['filter']) : "";
			$rcount = intval(urldecode($_REQUEST['rcount']));
			$tname = urldecode($_REQUEST['tname']);
			$this->uploadRows($table, $tname, $rcount, $offset, $limit, $bsize, $filter);
			break;
		case "tblexists":
			$bvresp->addStatus("tblexists", $db->isTablePresent($_REQUEST['tablename']));
			break;
		case "crttbl":
			$bvresp->addStatus("crttbl", $db->createTable($_REQUEST['query'], $_REQUEST['tablename']));
			break;
		case "drptbl":
			$bvresp->addStatus("drptbl", $db->dropBVTable($_REQUEST['name']));
			break;
		case "trttbl":
			$bvresp->addStatus("trttbl", $db->truncateBVTable($_REQUEST['name']));
			break;
		default:
			return false;
		}
		return true;
	}
}
endif;