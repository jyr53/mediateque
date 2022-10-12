<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gender Model
 *
 * @method \App\Model\Entity\Gender newEmptyEntity()
 * @method \App\Model\Entity\Gender newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Gender[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gender get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gender findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Gender patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gender[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gender|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gender saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gender[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gender[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gender[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gender[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GenderTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('gender');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nom_de_genre')
            ->maxLength('nom_de_genre', 50)
            ->allowEmptyString('nom_de_genre');

        return $validator;
    }
}
