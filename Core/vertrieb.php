<?php
//Gutscheinstatus neu 			gutschein wirde Erstellt aber noch nicht in der kassen importiert
//Gutscheinstatus kasse 		gutschein wurde ins kassensystem importiert
//Gutscheinstatus eingeloest  	gutschein wurde an der Kasse eingel�st.


class vertrieb extends vertrieb_parent
{

	public function haendlerliste( $hgid )
	{

		$myConfig = $this->getConfig();
		//$oDb = oxDb::getDb();
	//	$dbTbl = "oxuser";
	//	$Connection=mysql_pconnect($dbHost, $dbUser, $dbPwd);

		$query_haendler = "select  OXUSTID, OXCOMPANY, OXCUSTNR, OXUSERNAME, OXFNAME, OXLNAME, OXSTREET, OXSTREETNR, OXCITY, OXCOUNTRYID, OXZIP, OXFON, OXFAX, OXSAL    from oxuser  INNER JOIN oxobject2group  on oxobject2group.OXOBJECTID = oxuser.OXID where  oxobject2group.OXGROUPSID = '$hgid' order by  OXCOMPANY, OXLNAME  ";
		$haendler= oxDb::getDb()->Execute( $query_haendler);

		if ($haendler != false && $haendler->recordCount() > 0)
		{
			$i =0;
			while (!$haendler->EOF)
			{
			  	$array_haendler[$i]["firma"] 		=	htmlentities ($haendler->fields[1],ENT_QUOTES);
				$array_haendler[$i]["email"] 		=	htmlentities ($haendler->fields[3],ENT_QUOTES);
				$array_haendler[$i]["vname"] 		=	htmlentities ($haendler->fields[4],ENT_QUOTES);
				$array_haendler[$i]["nname"] 		=	htmlentities ($haendler->fields[5],ENT_QUOTES);
				$array_haendler[$i]["strasse"] 		=	htmlentities ($haendler->fields[6],ENT_QUOTES);
				$array_haendler[$i]["strassenr"] 	=	htmlentities ($haendler->fields[7],ENT_QUOTES);
				$array_haendler[$i]["plz"] 			=	htmlentities ($haendler->fields[10],ENT_QUOTES);
				$array_haendler[$i]["ort"] 			=	htmlentities ($haendler->fields[8],ENT_QUOTES);
				$array_haendler[$i]["land"] 		=	htmlentities ($haendler->fields[9],ENT_QUOTES);
				$array_haendler[$i]["tel"] 			=	htmlentities ($haendler->fields[11],ENT_QUOTES);
				$array_haendler[$i]["fax"] 			=	htmlentities ($haendler->fields[12],ENT_QUOTES);
				$array_haendler[$i]["anrede"] 		=	htmlentities ($haendler->fields[13],ENT_QUOTES);

			$i++;
			$haendler->moveNext();
			}

			return $array_haendler ;
		}

	}



	//execcatfilter();
}