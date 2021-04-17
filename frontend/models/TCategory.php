<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_category".
 *
 * @property int $id
 * @property int|null $key
 * @property string|null $name
 * @property int|null $parent_key 0为父节点
 */
class TCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'parent_key'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'name' => 'Name',
            'parent_key' => 'Parent Key',
        ];
    }
}
