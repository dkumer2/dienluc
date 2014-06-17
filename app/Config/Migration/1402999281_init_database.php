<?php
class InitDatabase extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'aros' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
					'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'model' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'foreign_key' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'lft' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'rght' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
				'aros_acos' => array(
					'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
					'aro_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'unsigned' => false, 'key' => 'index'),
					'aco_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'unsigned' => false),
					'_create' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'_read' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'_update' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'_delete' => array('type' => 'string', 'null' => false, 'default' => '0', 'length' => 2, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
						'ARO_ACO_KEY' => array('column' => array('aro_id', 'aco_id'), 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'acos', 'aros', 'aros_acos'
			),
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		return true;
	}
}
