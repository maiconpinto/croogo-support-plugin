<?php
namespace Support\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Support Model
 *
 * @method \Support\Model\Entity\Support get($primaryKey, $options = [])
 * @method \Support\Model\Entity\Support newEntity($data = null, array $options = [])
 * @method \Support\Model\Entity\Support[] newEntities(array $data, array $options = [])
 * @method \Support\Model\Entity\Support|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Support\Model\Entity\Support patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Support\Model\Entity\Support[] patchEntities($entities, array $data, array $options = [])
 * @method \Support\Model\Entity\Support findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SupportTable extends Table
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

        $this->setTable('support');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Search.Search');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->integer('priority')
            ->requirePresence('priority', 'create')
            ->notEmpty('priority');

        $validator
            ->date('deadline')
            ->requirePresence('deadline', 'create')
            ->notEmpty('deadline');

        $validator
            ->decimal('cost')
            ->requirePresence('cost', 'create')
            ->notEmpty('cost');

        return $validator;
    }
}
