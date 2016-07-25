<?php

namespace app\modules\unit\models;

use Yii;

/**
 * This is the model class for table "ext_model".
 *
 * @property string $id
 * @property string $name
 *
 * @property Unit[] $units
 */
class Extmodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ext_model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnits()
    {
        return $this->hasMany(Unit::className(), ['ext_id' => 'id']);
    }
}
