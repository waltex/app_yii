<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Crud_test1;

/**
 * SearchCrud_test1 represents the model behind the search form about `app\models\Crud_test1`.
 */
class SearchCrud_test1 extends Crud_test1
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campoa'], 'integer'],
            [['campob', 'campod', 'campoe'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Crud_test1::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'campoa' => $this->campoa,
            'campoe' => $this->campoe,
        ]);

        $query->andFilterWhere(['like', 'campob', $this->campob])
            ->andFilterWhere(['like', 'campod', $this->campod]);

        return $dataProvider;
    }
}
