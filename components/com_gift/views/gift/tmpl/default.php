<?php defined('_JEXEC') or die; ?>


<div class="list-banner-bg banner" style="background-image: url('images/mtavari.jpg');">
    <img src="images/mtavari.jpg" style="width: 110%; display: none;" />
    <div>
        <div class="gift-container list-banner">
            <div class="right-big-text">#ანზორ თოდრია</div>
            <div class="right-medium-text">
                ანზორ თოდრიას პერსონაური გამოფენა
                <br />
                მხატვრობისა და პოპარტის სრულიად ახალი ხედვა და იდეა
                <br />
                <br />
                მთელი გულით შესრულებული ნამუშევრები
            </div>

            <div class="clear"></div>
            <div class="banner-with-love">
               www.anzoritodria.ge
            </div>


            <!-- <a href="https://www.facebook.com/siurpriz.ge" target="_blank">გვიპოვეთ Facebook - ზე</a> -->


        </div>

    </div>

    <a class="arrow-slide-to">

    </a>

    <div class="bottom-shadow"></div>
</div>



<div id="gift-container" class="gift-container" data-category="<?php echo $this->cat ?>">

    <div class="gift-container-inner clear">

        <p style="color: white; height: 50px;"></p>

        <?php foreach( $this->gifts as $gift ): ?>
            <div class="giftItem">
                <div class="poster" >
                    <a href="<?php echo $gift->category ?>/<?php echo $gift->alias ?>">
                        <div class="giftPopup">
                            <div class="inside">
                                <span class="send"></span>
                                <div>
                                    <span>იხილე დეტალურად</span>
                                  
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php if( !empty( $gift->list_image ) ): ?>
                        <img src="<?php echo $gift->list_image ?>" >
                    <?php endif; ?>
                </div>
                <h2><a href="<?php echo $gift->category ?>/<?php echo $gift->alias ?>"><?php echo $gift->name ?></a></h2>
            </div>
        <?php endforeach; ?>
    </div>
</div>