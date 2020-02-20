<?php 
	/*-------------------------*/
	//Connection Data Base
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbnm",$user,$pass);
		$conn->exec('set names utf8');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// echo "conexion exitosa";
	} catch (PDOException $e) {
		echo "Error en la conexion: ".$e->getMessage();
	}
	/*-------------------------*/
	//Add Student
	function addStudents($names, $birthdate, $email, $password, $conn) {
		try {
			
			$sql  = "INSERT INTO users (names, birthdate, email, password) VALUES(:names,:birthdate, 	:email, :password)";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":names",$names);
			$stmt->bindparam(":birthdate",$birthdate);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":password",$password);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
			
	}

	//Add Student
	function addSubjects($name, $conn) {
		try {
			
			$sql  = "INSERT INTO subject (name) VALUES(:name)";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":name",$name);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
			return false;
		}
			
	}
	//Add Student
		function addNotes($user_id, $subject_id,$nt1, $nt2, $nt3, $conn) {
		try {
			
			$sql  = "INSERT INTO notes (user_id, subject_id,nt1, nt2, nt3)
					 VALUES(:user_id, :subject_id, :nt1, :nt2, :nt3 )";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":user_id",$user_id);
			$stmt->bindparam(":subject_id",$subject_id);
			$stmt->bindparam(":nt1",$nt1);
			$stmt->bindparam(":nt2",$nt2);
			$stmt->bindparam(":nt3",$nt3);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}
	// *----------------------------------------*//
	//Login 

	function login($email,$password,$conn) {
		try {
			$sql = "SELECT * FROM users 
					WHERE email = :email
					AND password = :password
					LIMIT 1";

			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":password",$password);
			$stmt->execute();
			if ($stmt->rowCount() > 0) {
				$ur = $stmt->fetch(PDO::FETCH_ASSOC);
				$_SESSION['message'] = "El Estudiante" .$ur['names']." si esta registrado";
				$_SESSION['uid']  = $ur['id'];
				$_SESSION['unames']  = $ur['names'];
				$_SESSION['uphoto']  = $ur['photo'];
				$_SESSION['urole']   = $ur['role'];
				$_SESSION['ustatus'] = $ur['status'];
				return true; 
			} else {
				$_SESSION['error'] = "El Estudiante no esta registrado y/o tiene los datos incorrectos";
				return false;
			}
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	// *----------------------------------------*//
	//Listar Students

	function listStudents($conn) {
		try{
			$sql = "SELECT * FROM users
					WHERE role = 'Student'";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();
		    return $stmt->fetchAll();
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	} 
	//Listar Subjects

	function listSubjects($conn) {
		try{
			$sql = "SELECT * FROM subject";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();
		    return $stmt->fetchAll();
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	} 
	//Listar Notes

	function listNotes($conn) {
		try{
			$sql = "SELECT n.*, u.names AS uname, s.name AS sname, 
					(n.nt1 + n.nt2 + n.nt3)/3 AS fnote
					FROM notes AS n,users AS u, subject AS s
					WHERE n.user_id = u.id
					AND n.subject_id = s.id";
		    $stmt = $conn->prepare($sql);
		    $stmt->execute();
		    return $stmt->fetchAll();
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	} 

//Save estudiantes
function saveStudent($names, $birthdate, $email, $photo, $password, $conn) {
		try {
			
			$sql  = "INSERT INTO users (names, birthdate, email, photo, password)
					 VALUES(:names,:birthdate, :email, :photo, :password)";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":names",$names);
			$stmt->bindparam(":birthdate",$birthdate);
			$stmt->bindparam(":email",$email);
			$stmt->bindparam(":photo",$photo);
			$stmt->bindparam(":password",$password);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}

//Save Materias
function saveSubjects($name, $conn) {
		try {
			
			$sql  = "INSERT INTO subject(name)
					 VALUES(:name)";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":name",$name);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}



function verifyNote($subject_id, $user_id, $conn) {
		try {
			$sql = "SELECT id FROM notes 
					WHERE user_id = :user_id
					AND subject_id = :subject_id
					LIMIT 1";

			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":user_id",$user_id);
			$stmt->bindparam(":subject_id",$subject_id);
			$stmt->execute();
			if ($stmt->rowCount() > 0) {
				
				return false; 
			} else {
				
				return true;
			}
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	//function saveNotes
	function saveNotes($nt1, $nt2, $nt3,$user_id, $subject_id, $conn) {
		try {

			if (verifyNote($subject_id, $user_id, $conn)) {

				$sql  = "INSERT INTO notes (nt1, nt2, nt3, user_id, subject_id)
						 VALUES(:nt1, :nt2, :nt3, :user_id, :subject_id)";
				$stmt = $conn->prepare($sql);
				
				$stmt->bindparam(":nt1",$nt1);
				$stmt->bindparam(":nt2",$nt2);
				$stmt->bindparam(":nt3",$nt3);
				$stmt->bindparam(":user_id",$user_id);
				$stmt->bindparam(":subject_id",$subject_id);
				if($stmt->execute()) {
					return true;
				} else {
					return false;
					
				}	
			
				}else{

					$_SESSION['error'] = "El Estudiante y la Materia ya se encuentran Calificados";
					return false;
					 
			}

			} catch(PDOException $e) {
				echo $e->getMessage();
			}
				
		}

	/*Show Estudiantefunction */

	function showStudent($id,$conn) {
		try {
			$sql = "SELECT * FROM users 
					WHERE id = :id";

			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	/*Show Subjest */

	function showSubject($id, $conn) {
		try {
			$sql = "SELECT * FROM subject 
					WHERE id = :id";

			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			$stmt->execute();
			return $stmt->fetchAll();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	/*ShowNotes */

	function showNotes($id, $conn) {
		try{
			$sql = "SELECT n.*, u.names AS uname, u.photo, s.name AS sname, 
					(n.nt1 + n.nt2 + n.nt3)/3 AS fnote
					FROM notes AS n,users AS u, subject AS s
					WHERE n.user_id = u.id
					AND n.subject_id =s.id
					AND n.id = :id";
		    $stmt = $conn->prepare($sql);
		    $stmt->bindparam(":id",$id);
		    $stmt->execute();
		    return $stmt->fetchAll();
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	} 
	/*ShowMyNotes */

	function showMyNotes($id, $conn) {
		try{
			$sql = "SELECT n.*, s.name AS sname, 
					(n.nt1 + n.nt2 + n.nt3)/3 AS fnote
					FROM notes AS n, users AS u,subject AS s
					WHERE n.user_id = u.id
					AND n.subject_id =s.id
					AND n.user_id = u.id";
		    $stmt = $conn->prepare($sql);
		    $stmt->bindparam(":id",$id);
		    $stmt->execute();
		    return $stmt->fetchAll();
		}catch (PDOException $e){
			echo $e->getMessage();
		}
	} 


	//Update estudiantes

function updateStudent($id, $names, $birthdate, $email, $photo, $conn) {
		try {
			if ($photo != null) {
				$sql  = "UPDATE users SET names =:names, birthdate =:birthdate, email =:email, photo =:photo WHERE id = :id";
			}else{
				$sql  = "UPDATE users SET names = :names, birthdate = :birthdate, email =:email WHERE id = :id";
			}
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			$stmt->bindparam(":names",$names);
			$stmt->bindparam(":birthdate",$birthdate);
			$stmt->bindparam(":email",$email);
			if ($photo != null) {
				$stmt->bindparam(":photo",$photo);	
			}
			
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}
	//Update Subject

function updateSubject($id, $name, $conn) {
		try {
			
			$sql  = "UPDATE subject SET name = :name WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			$stmt->bindparam(":name",$name);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}
//Update Notes

function updateNotes( $id, $nt1, $nt2, $nt3, $user_id, $subject_id, $conn) {
		try {
			$sql  = "UPDATE notes SET nt1 = :nt1, nt2 = :nt2, nt3 =:nt3,user_id =:user_id,subject_id =:subject_id  WHERE id = :id";
			
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			$stmt->bindparam(":nt1",$nt1);
			$stmt->bindparam(":nt2",$nt2);
			$stmt->bindparam(":nt3",$nt3);
			$stmt->bindparam(":user_id",$user_id);
			$stmt->bindparam(":subject_id",$subject_id);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}
			


//Delete estudiantes

function deleteStudent($id, $conn) {
		try {
			
			$sql  = "DELETE FROM users WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}
	//Delete subject

function deleteSubject($id, $conn) {
		try {
			
			$sql  = "DELETE FROM subject WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}
		//Delete Notes

function deleteNotes($id, $conn) {
		try {
			
			$sql  = "DELETE FROM notes WHERE id = :id";
			$stmt = $conn->prepare($sql);
			$stmt->bindparam(":id",$id);
			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
			
		} catch(PDOException $e) {
			echo $e->getMessage();
		}
			
	}

