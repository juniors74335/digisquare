<?php
class CreateEventsTagsTable extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = 'Creates the EventsTags table';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'events_tags' => array(
					'id' => array(
						'type'    => 'integer',
						'null'    => false,
						'length'  => 11,
						'key'     => 'primary',
					),
					'event_id' => array(
						'type'    => 'integer',
						'null'    => false,
						'length'  => 11,
					),
					'tag_id' => array(
						'type'    => 'integer',
						'null'    => false,
						'length'  => 11,
					),
					'created' => array(
						'type'    => 'datetime',
						'null'    => false,
					),
					'modified' => array(
						'type'    => 'datetime',
						'null'    => false,
					),
					'indexes' => array(
						'PRIMARY' => array(
							'column' => 'id',
							'unique' => 1
						),
					),
					'tableParameters' => array(
						'charset' => 'utf8',
						'collate' => 'utf8_general_ci',
						'engine' => 'MyISAM'
					),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'events_tags'
			),
		),
	);
}
