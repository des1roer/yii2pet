<?php

namespace app\modules\unit\models;

use Yii;

/**
 * This is the model class for table "unit".
 *
 * @property string $id
 * @property string $name
 * @property string $exp
 * @property string $lvl
 * @property string $base_id
 * @property string $ext_id
 *
 * @property BaseModel $base
 * @property ExtModel $ext
 */
class Unit extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'unit';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'base_id'], 'required'],
            [['exp', 'lvl', 'base_id', 'ext_id'], 'integer'],
            [['exp'], 'default', 'value' => 0],
            [['lvl'], 'default', 'value' => 1],
            [['name'], 'string', 'max' => 50],
            [['base_id'], 'exist', 'skipOnError' => true, 'targetClass' => BaseModel::className(), 'targetAttribute' => ['base_id' => 'id']],
            [['ext_id'], 'exist', 'skipOnError' => true, 'targetClass' => ExtModel::className(), 'targetAttribute' => ['ext_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'exp' => 'Опыт',
            'lvl' => 'Уровень',
            'base_id' => 'Базовая модель',
            'ext_id' => 'Дополнительно',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBase() {
        return $this->hasOne(Basemodel::className(), ['id' => 'base_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getExt() {
        return $this->hasOne(Extmodel::className(), ['id' => 'ext_id']);
    }

}
