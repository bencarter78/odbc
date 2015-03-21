<?php namespace TCK\Odbc;

use Illuminate\Database\Connectors\Connector;
use Illuminate\Database\Connectors\ConnectorInterface;

class ODBCConnector extends Connector implements ConnectorInterface {

	/**
	 * Establish a database connection.
	 *
	 * @param array $config
	 *
	 * @internal param array $options
	 *
	 * @return PDO
	 */
	public function connect( array $config )
	{
		$options = $this->getOptions( $config );

		$dsn = array_get( $config, 'dsn' );

		return $this->createConnection( $dsn, $config, $options );
	}


}