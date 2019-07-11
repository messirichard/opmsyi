<section class="career-sec-2">
<div class="prelative container">
<div class="title-head">
<div class="avail">
<p><?php echo Tt::t('front', 'There are no opening positions at the
moment.'); ?></p>
</div>
</div>
<?php
$criteria = new CDbCriteria;
$criteria->condition = 'actives = 1';
$m_karir = Career::model()->findAll($criteria);
?>
<?php foreach ($m_karir as $key => $value): ?>
<div class="hr-career"></div>
<div class="title-pos">
<p><?php echo $value->title ?></p>
</div>
<div class="row w-100 pb-5">
<div class="col-md-20">
<div class="desc pr-3">
<?php echo $value->intro_desc ?>
</div>
<div class="work">
<p>Work Locations:</p>
<b><?php echo $value->lokasi_kerja ?></b>
</div>
<div class="work">
<p>Email to apply for this job:</p>
<b><?php echo $this->setting['career_email'] ?></b>
</div>
</div>
<div class="col-md-20">
<div class="heading-col">
<p>job description</p>
</div>
<div class="req">
<?php echo $value->deskripsi ?>
</div>
</div>
<div class="col-md-20">
<div class="heading-col">
<p>qualifications</p>
</div>
<div class="req">
<?php echo $value->kualifikasi ?>
</div>
</div>
</div>
<?php endforeach ?>

<div class="clear"></div>

</div>
<div class="pb-5"></div>
</section>