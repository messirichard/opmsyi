<?php

/**
 * This is the model class for table "view_slide".
 *
 * The followings are the available columns in table 'view_slide':
 * @property integer $id
 * @property integer $topik_id
 * @property string $image
 * @property integer $active
 * @property string $date_input
 * @property string $date_update
 * @property string $insert_by
 * @property string $last_update_by
 * @property string $writer
 * @property integer $id2
 * @property integer $slide_id
 * @property integer $language_id
 * @property string $title
 * @property string $content
 * @property string $url
 */
class ViewSlide extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewSlide the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'view_slide';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('topik_id, image, active, date_input, date_update, insert_by, last_update_by, writer, slide_id, language_id, title, content, url', 'required'),
			array('id, topik_id, active, id2, slide_id, language_id', 'numerical', 'integerOnly'=>true),
			array('image, insert_by, last_update_by, title', 'length', 'max'=>255),
			array('writer, url', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, topik_id, image, active, date_input, date_update, insert_by, last_update_by, writer, id2, slide_id, language_id, title, content, url', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'topik_id' => 'Topik',
			'image' => 'Image',
			'active' => 'Active',
			'date_input' => 'Date Input',
			'date_update' => 'Date Update',
			'insert_by' => 'Insert By',
			'last_update_by' => 'Last Update By',
			'writer' => 'Writer',
			'id2' => 'Id2',
			'slide_id' => 'Slide',
			'language_id' => 'Language',
			'title' => 'Title',
			'content' => 'Content',
			'url' => 'Url',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('topik_id',$this->topik_id);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('date_input',$this->date_input,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('insert_by',$this->insert_by,true);
		$criteria->compare('last_update_by',$this->last_update_by,true);
		$criteria->compare('writer',$this->writer,true);
		$criteria->compare('id2',$this->id2);
		$criteria->compare('slide_id',$this->slide_id);
		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('url',$this->url,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function primaryKey() {
	    return 'id';
	}
}