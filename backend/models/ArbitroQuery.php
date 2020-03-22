<?php

namespace backend\models;

/**
 * This is the ActiveQuery class for [[Arbitro]].
 *
 * @see Arbitro
 */
class ArbitroQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Arbitro[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Arbitro|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
