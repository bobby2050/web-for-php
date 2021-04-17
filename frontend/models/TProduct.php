<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_product".
 *
 * @property int $id
 * @property int|null $category 一级分类
 * @property int|null $second_category 二级分类
 * @property string|null $img_url
 * @property string|null $name
 * @property string|null $no
 * @property string|null $detail
 * @property string|null $time
 * @property string|null $feature
 */
class TProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category', 'second_category'], 'integer'],
            [['time'], 'safe'],
            [['category'], 'integer'],
            [['img_url'], 'string', 'max' => 150],
            [['name', 'no'], 'string', 'max' => 50],
            [['detail', 'feature'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'second_category' => 'Second Category',
            'img_url' => 'Img Url',
            'name' => 'Name',
            'no' => 'No',
            'detail' => 'Detail',
            'time' => 'Time',
            'feature' => 'Feature',
        ];
    }

    public static  function getlast3()
    {
        $rows = (new \yii\db\Query())
            ->from(self::tableName())
            ->select(['id', 'img_url', 'name', 'no'])
            ->orderBy(['id' => SORT_DESC])
            ->limit(3)
            ->all();
        return $rows;
    }
}
