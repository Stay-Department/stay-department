<div class="staff">
  <img class="staff-img" src="<?php block_field("img");?>"/>
  <div class="staff-header">
    <p class="staff-name"><?php block_field("name");?></p>
    <p class="staff-twitter">
      <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.20995 18.875C4.68261 18.875 2.3267 18.1399 0.34375 16.8716C2.02734 16.9805 4.99849 16.7196 6.84655 14.9569C4.06647 14.8293 2.8127 12.6971 2.64917 11.7859C2.88539 11.877 4.01195 11.9864 4.64792 11.7312C1.44992 10.9294 0.959319 8.12291 1.06834 7.26639C1.66797 7.68554 2.68551 7.83133 3.08526 7.79488C0.105307 5.66268 1.17736 2.45528 1.70431 1.76277C3.84283 4.72552 7.04781 6.38951 11.0128 6.48206C10.938 6.15419 10.8986 5.81283 10.8986 5.46222C10.8986 2.94603 12.9324 0.90625 15.4412 0.90625C16.752 0.90625 17.9331 1.46309 18.7623 2.35378C19.6382 2.14852 20.9565 1.66802 21.601 1.2525C21.2761 2.41883 20.2648 3.39179 19.653 3.7524C19.6581 3.76467 19.6481 3.74008 19.653 3.7524C20.1904 3.67112 21.6444 3.39169 22.2188 3.002C21.9347 3.65723 20.8625 4.74666 19.9826 5.35658C20.1463 12.5766 14.6222 18.875 7.20995 18.875Z" fill="#B42B2B"/>
      </svg> <a href="https://twitter.com/<?php block_field("twitter");?>">@<?php block_field("twitter");?></a>
    </p>
    <div class="staff-team"><?php block_field("team");?></div>
    <p class="staff-languages">
        <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.87 13.07L9.33 10.56L9.36 10.53C11.1 8.59 12.34 6.36 13.07 4H16V2H9V0H7V2H0V3.99H11.17C10.5 5.92 9.44 7.75 8 9.35C7.07 8.32 6.3 7.19 5.69 6H3.69C4.42 7.63 5.42 9.17 6.67 10.56L1.58 15.58L3 17L8 12L11.11 15.11L11.87 13.07ZM17.5 8H15.5L11 20H13L14.12 17H18.87L20 20H22L17.5 8ZM14.88 15L16.5 10.67L18.12 15H14.88Z" fill="#B42B2B"/>
        </svg>
			<?php  block_field( 'languages' ) ?>
    </p>
    <div class="staff-rating">
        <p style="margin-right: 5px;">GENIE</p>
		<?php for ($i = 1; $i <= block_value("genie"); $i++) {
          echo '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.0248 7.33366L8.99984 0.666992L6.97484 7.33366H0.666504L5.8165 11.0087L3.85817 17.3337L8.99984 13.4253L14.1498 17.3337L12.1915 11.0087L17.3332 7.33366H11.0248Z" fill="#EF7438"/>
          </svg>';
        }?>
        
    </div>
    <div class="staff-rating">
      <p style="margin-right: 5px;">MELON</p>
		<?php for ($i = 1; $i <= block_value("melon"); $i++) {
          echo '<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.0248 7.33366L8.99984 0.666992L6.97484 7.33366H0.666504L5.8165 11.0087L3.85817 17.3337L8.99984 13.4253L14.1498 17.3337L12.1915 11.0087L17.3332 7.33366H11.0248Z" fill="#EF7438"/>
          </svg>';
        }?>
      
    </div>
  </div>
</div>
