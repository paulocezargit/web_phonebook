<?php

class Contact {

	public function Save($name, $birthday, $email, $telephone_1, $telephone_2, $social_media_facebook, $social_media_instagram, $social_media_twitter_x) {
		
		try {
			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "INSERT INTO tb_contact (name, birthday, email, telephone_1, telephone_2, social_media_facebook, social_media_instagram, social_media_twitter_x) 
			VALUES (:NAME, :BIRTHDAY, :EMAIL, :TELEPHONE_1, :TELEPHONE_2, :FACEBOOK, :INSTAGRAM, :TWITTER_X)";

			$stmt = $conn->prepare($sql);
			$stmt->bindValue(":NAME", $name, PDO::PARAM_STR);
			$stmt->bindValue(":BIRTHDAY", $birthday, PDO::PARAM_STR);
			$stmt->bindValue(":EMAIL", $email, PDO::PARAM_STR);
			$stmt->bindValue(":TELEPHONE_1", $telephone_1, PDO::PARAM_STR);
			$stmt->bindValue(":TELEPHONE_2", $telephone_2, PDO::PARAM_STR);
			$stmt->bindValue(":FACEBOOK", $social_media_facebook, PDO::PARAM_STR);
			$stmt->bindValue(":INSTAGRAM", $social_media_instagram, PDO::PARAM_STR);
			$stmt->bindValue(":TWITTER_X", $social_media_twitter_x, PDO::PARAM_STR);

			$success = $stmt->execute();
			$conn = null;
			return $success;

		} catch (PDOException $e) {
			error_log("Erro ao inserir contato: " . $e->getMessage());
			return false;
		}

	}

	public function Edit($id_contact, $name, $birthday, $email, $telephone_1, $telephone_2, $social_media_facebook, $social_media_instagram, $social_media_twitter_x) {

		try {
			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "UPDATE tb_contact SET name = :NAME, birthday = :BIRTHDAY, email = :EMAIL, telephone_1 = :TELEPHONE_1, telephone_2 = :TELEPHONE_2, social_media_facebook = :FACEBOOK, social_media_instagram = :INSTAGRAM, social_media_twitter_x = :TWITTER_X 
			WHERE id = :ID_CONTACT";

			$stmt = $conn->prepare($sql);
			$stmt->bindValue(":NAME", $name, PDO::PARAM_STR);
			$stmt->bindValue(":BIRTHDAY", $birthday, PDO::PARAM_STR);
			$stmt->bindValue(":EMAIL", $email, PDO::PARAM_STR);
			$stmt->bindValue(":TELEPHONE_1", $telephone_1, PDO::PARAM_STR);
			$stmt->bindValue(":TELEPHONE_2", $telephone_2, PDO::PARAM_STR);
			$stmt->bindValue(":FACEBOOK", $social_media_facebook, PDO::PARAM_STR);
			$stmt->bindValue(":INSTAGRAM", $social_media_instagram, PDO::PARAM_STR);
			$stmt->bindValue(":TWITTER_X", $social_media_twitter_x, PDO::PARAM_STR);
			$stmt->bindValue(":ID_CONTACT", $id_contact, PDO::PARAM_INT);

			$success = $stmt->execute();
			$conn = null;
			return $success;

		} catch (PDOException $e) {
			error_log("Erro ao editar contato: " . $e->getMessage());
			return false;
		}

	}

	public function Delete($id_contact) {
		
		try {
			$conn = new PDO("mysql:dbname=" . DB_DATABASE . ";host=" . DB_HOST, DB_USER, DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$sql = "DELETE FROM tb_contact WHERE id = :ID_CONTACT";
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(":ID_CONTACT", $id_contact, PDO::PARAM_INT);

			$success = $stmt->execute();
			$conn = null;
			return $success;

		} catch (PDOException $e) {
			error_log("Erro ao deletar contato: " . $e->getMessage());
			return false;
		}
		
	}

}

?>
