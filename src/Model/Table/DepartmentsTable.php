<?php
namespace App\Model\Table;

use App\Model\Entity\Department;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departments Model
 *
 * @property \Cake\ORM\Association\HasMany $Students
 * @property \Cake\ORM\Association\HasMany $Users
 */
class DepartmentsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('departments');
        $this->displayField('department_name');
        $this->primaryKey('id');

        $this->hasMany('Students', [
            'foreignKey' => 'department_id'
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'department_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('department_name', 'create')
            ->notEmpty('department_name');

        $validator
            ->requirePresence('created_on', 'create')
            ->notEmpty('created_on');

        return $validator;
    }
}
