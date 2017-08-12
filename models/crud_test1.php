<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test1".
 *
 * @property integer $campoa
 * @property string $campob
 * @property string $campod
 * @property string $campoe
 */
class crud_test1 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test1';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campoa', 'campob', 'campod', 'campoe'], 'required'],
            [['campoa'], 'integer'],
            [['campoe'], 'safe'],
            [['campob', 'campod'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campoa' => 'label_a',
            'campob' => 'label_b',
            'campod' => 'label_c',
            'campoe' => 'label_d',
        ];
    }
}
