<?php
/*
 * This file is part of the YiiModules.com
 *
 * (c) Yii2 modules open source project are hosted on <http://github.com/yiimodules/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace salehasadi\category\models;
use Yii;
use yii\imagine\Image;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use yii\helpers\Inflector;
use yii\helpers\Html;
/**
 * This is the model class for table "ymd_categories".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $image
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property string $position
 * @property integer $is_active
 * @property integer $created_at
 * @property integer $updated_at
 */
class Categories extends \yii\db\ActiveRecord
{

	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }
	
	

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
             [['title', 'status'], 'required'],
            [['parent_id', 'status', 'sort_order'], 'integer'],
            [['creation_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 50]
        
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',
            'status' => 'Status',
            'sort_order' => 'Sort Order',
            'creation_time' => 'Creation Time',
            'update_time' => 'Update Time',
        ];
    
    }
		
	
}
