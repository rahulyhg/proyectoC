<?php
namespace App\Models;

class Instituciones extends Model {

	public function listar_institucion(){
		$return = array(
			'status' => false,
		);

		$data = array();

		$sql = "SELECT * FROM instritucion";

		$result = $this->execute_query( CONNECTION_SIJ, false, 'sql', $sql, $data );
		$return = array_merge( $return, $result );
		if( $return['status'] ){
			$return['items'] = $this->get_all( $result['stmt'] );
		}
		return $return;
	}
}

?>