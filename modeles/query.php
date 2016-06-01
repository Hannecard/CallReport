<?php 

function find_todo($id){
		global $db;
		$todo = array();
		$req = $db->requete("SELECT*FROM t_todo t inner join t_utilisateur_todo ut on ut.id_todo = t.id_todo where ut.id_utilisateur ='".$id."' AND pourcentage_real != 100 ORDER BY t.date_attendue ASC LIMIT 5;");
		while($data = $req->fetch()){
			$todo[] = $data;
		}
		return $todo;
	}
	function find_todo_all($id){
		global $db;
		$todo = array();
		$req = $db->requete("SELECT*FROM t_todo t inner join t_utilisateur_todo ut on ut.id_todo = t.id_todo where ut.id_utilisateur ='".$id."' AND pourcentage_real != 100 ORDER BY t.date_attendue ASC;");
		while($data = $req->fetch()){
			$todo[] = $data;
		}
		return $todo;
	}
	function find_utilisateur_all(){
		global $db;
		$todo = array();
		$req = $db->requete("SELECT*FROM info_utilisateur_todo  ORDER BY id_todo ASC;");
		while($data = $req->fetch()){
			$todo[] = $data;
		}
		return $todo;
	}
	function find_pensebete($id){
		global $db;
		$pensebete = array();
		$req = $db->requete("SELECT*FROM t_pense_bete p inner join t_utilisateur_pensebete up on up.id_pense_bete = p.id_pense_bete where up.id_utilisateur ='".$id."' ORDER BY p.date_pense_bete ASC LIMIT 5;");
		while($data = $req->fetch()){
			$pensebete[] = $data;
		}
		return $pensebete;
	}
	function find_pensebete_All($id){
		global $db;
		$pensebete = array();
		$req = $db->requete("SELECT*FROM t_pense_bete p inner join t_utilisateur_pensebete up on up.id_pense_bete = p.id_pense_bete where up.id_utilisateur ='".$id."' ORDER BY p.date_pense_bete ASC;");
		while($data = $req->fetch()){
			$pensebete[] = $data;
		}
		return $pensebete;
	}
	function update_real_todo($idt,$real){
		global $db;
		$upreal = array();
		$req = $db->requete("UPDATE t_todo SET pourcentage_real =".$real." where id_todo=".$idt);
		return $upreal;
	}
	function update_todo($idt,$descr,$date,$real,$titre){
		global $db;
		$uptodo = array();
		$req = $db->requete("UPDATE t_todo t SET text_todo=".$db->getPDO()->quote($descr)." , date_attendue ='".$date."',  pourcentage_real =".$real." , titre =".$db->getPDO()->quote($titre)." where id_todo=".$idt);
		return $uptodo;
	}
	function update_pb($idpb,$descr,$date,$titre){
		global $db;
		$uppb = array();
		$req = $db->requete("UPDATE t_pense_bete p SET text_pense_bete=".$db->getPDO()->quote($descr)." ,date_pense_bete='".$date."' , titre=".$db->getPDO()->quote($titre)." where id_pense_bete=".$idpb);
		return $uppb;
	}
   function ajoutTODO($desc,$date,$range,$titre,$idu){
		global $db;
		$req = $db->requete("INSERT INTO t_todo VALUES('',".$db->getPDO()->quote($desc).",'".$date."','".$range."',null,".$db->getPDO()->quote($titre).",null)");
		$req = $db->requete("INSERT INTO t_utilisateur_todo VALUES(".$idu.",LAST_INSERT_ID())");
	}	
	function ajoutPB($desc,$date,$titre,$idu){
		global $db;
		$req = $db->requete("INSERT INTO t_pense_bete VALUES('',".$db->getPDO()->quote($desc).",'".$date."',".$db->getPDO()->quote($titre).",null)");
		$req = $db->requete("INSERT INTO t_utilisateur_pensebete VALUES(LAST_INSERT_ID(),".$idu.")");
	}
	function delTodo($idt){
		$dbName = "bd_hannecard";
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$pdo = new PDO("mysql:dbname=".$dbName."; host=".$host.";charset=utf8", $user, $password);

		$req = $pdo->exec("DELETE from t_utilisateur_todo where id_todo =".$idt);
		$req = $pdo->exec("DELETE from t_todo where id_todo =".$idt);
	}	
	function delPB($idpb){
		$dbName = "bd_hannecard";
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$pdo = new PDO("mysql:dbname=".$dbName."; host=".$host.";charset=utf8", $user, $password);		
		$req = $pdo->exec("DELETE from t_utilisateur_pensebete where id_pense_bete =".$idpb);
		$req = $pdo->exec("DELETE from t_pense_bete where id_pense_bete =".$idpb);
	}	
?>