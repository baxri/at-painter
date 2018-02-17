<?php defined('_JEXEC') or die; ?>

<form  name="giftForm" id="giftForm" action="<?php echo JUri::root().'toPay' ?>" method="post" novalidate>

    <div class="details">

        <div class="banner" style="background-image: url('<?php echo $this->gift->big_image ?>');">

        
        <img src="<?php echo $this->gift->big_image ?>" style="width: 110%; display: none;" />
       
            <div  class="container inner-banner">
                
                    <div class="left">
                    <a href="index.php"><h1>#<?php echo $this->gift->name ?></h1> </a>
                    <a href="index.php">    <div><?php echo $this->gift->slogan ?></div></a>
                    </div>
               
                <div class="right">
                    <!-- <p>გაუგზავნე "<?php echo $this->gift->name ?>" - ის სასაჩუქრე ვაუჩერი </p> -->
                    <!-- <button class="start-process"><span ng-show="currentStep == 1">აჩუქე</span><span ng-show="currentStep > 1">გააგრძელე</span></button> -->

                    <!-- <div class="fb-share-button" data-href="http://siurpriz.ge/home" data-layout="button"></div> -->
                </div>

            </div>

            <div class="banner-gradient"></div>

        </div>

        <!-- <div class="button-row " style="height: 100px; background: lightgray; height: 50px; border-top: 0px solid lightgray;">

            <div  class="container " style="height: 100px;">
               
                
                <a style="width: <?php// echo $this->button_width ?>%;" data-container="brand-galery" href="javascript:void(0)" class="big-tab active">გალერეაა</a>
               <a style="width: <?php// echo $this->button_width ?>%;" data-container="brand-info" href="javascript:void(0)" class="first  big-tab">ინფორმაცია სურათზე</a>
              
            </div>

        </div> -->

        <div class="gift-container details-container">

            <div id="brand-info" class="brand-conrainer" style="display: none;" >

                <div class="left">
                    <?php if( !empty( $this->gift->description ) ): ?>
                        <?php echo $this->gift->description; ?>
                    <?php else: ?>
                        ინფორმაცია არ არის წარმოდგენილი
                    <?php endif; ?>
                </div>

                <!-- <div class="right">
                    <p>საკონტაქტო ინფომაცია</p>
                    <a href="javascript:void(0)" style="background-color: #E6E6E6; color: gray;">ტელ: <?php echo $this->gift->hot_line ?></a>
                    <a target="_blank" href="<?php echo $this->gift->website ?>" style="background-color: #CCCCCC; color: white;">ვებ გვერდზე გადასვლა</a>
                    <a target="_blank" href="<?php echo $this->gift->fb_address ?>" style="background-color: #003399; color: white;">ჩვენ facebook - ზე</a>

                </div> -->

            </div>

            <?php if( !empty( $this->gallery ) ): ?>
            <div id="brand-galery" class="brand-conrainer brand-galery" >

               <div class="content">
                   <?php if( !empty( $this->gallery ) ): ?>
                       <?php foreach( $this->gallery as $item ): ?>
                           <div class="item">
                               <a class="show-image" href="<?php echo $item->img; ?>" data-imagelightbox="f">
                                   <img src="<?php echo $item->img; ?>" alt="<?php echo $item->name; ?>">
                               </a>
                               <?php if( false ): ?>
                                <h2><?php echo $item->name; ?></h2>
                               <?php endif; ?>

                               <?php if( !empty($item->price) ): ?>
                                   <p><?php echo $item->price; ?> GEL</p>
                               <?php endif; ?>



                           </div>

                       <?php endforeach; ?>
                   <?php else: ?>
                       <p>გალერეა არ არის წარმოდგენილი</p>
                   <?php endif; ?>
               </div>

                <div class="clear"></div>

            </div>
            <?php endif; ?>

            <div id="brand-how-to-use" class="brand-conrainer brand-galery" style="display: none;">

                <div class="left">
                    როგორ გამოვიყენო ვაუჩერი?
                </div>


                <div class="clear"></div>
            </div>

        </div>



    </div>


    <?php require_once 'process.php'?>


</form>



