<?php namespace TCK\Odbc;

use Illuminate\Database\Connection;

class ODBCConnection extends Connection {

	/**
	 * Get the default query grammar instance.
	 *
	 * @return Illuminate\Database\Query\Grammars\Grammars\Grammar
	 */
	protected function getDefaultQueryGrammar()
	{
		$class = config('database.connections.odbc.grammar.query') ?: '\TCK\Odbc\ODBCQueryGrammar';
		return $this->withTablePrefix( new $class );
	}

	/**
	 * Get the default schema grammar instance.
	 *
	 * @return Illuminate\Database\Schema\Grammars\Grammar
	 */
	protected function getDefaultSchemaGrammar()
	{
		$class = config('database.connections.odbc.grammar.schema') ?: '\TCK\Odbc\ODBCSchemaGrammar';
		return $this->withTablePrefix( new $class );
	}

}
