<?php

require_once 'header.php';

$database_original = json_decode( file_get_contents( 'database.json' ), true );
$database = [];

foreach ( $database_original['users'] as $index => $value) {
    $database[$index + 1] = $value;
}

$current_user = '1'; // ID of the person to show

?>

<div class="card">
    <div class="profile-img">
        <img src="<?php echo $database[$current_user]['profile_photo']?>" alt="<?php echo $database[$current_user]['fullname'] ?>">
    </div>
    <h2><?php echo $database[$current_user]['fullname']?></h2>
    <h3><?php echo $database[$current_user]['title'] . ' @' . $database[$current_user]['company']?></h3>

    <div class="contact-info">
        <?php if ( $database[$current_user]['phone'] ): ?>
        <a href="tel:<?php echo $database[$current_user]['phone'] ?>">
            <span class="icon"><i class="fas fa-phone-alt"></i></span>
            <span>Personal Phone</span>
        </a>
        <?php endif; ?>
        <?php if ( $database[$current_user]['email'] ): ?>
        <a href="mailto:<?php echo $database[$current_user]['email'] ?>">
            <span class="icon"><i class="fas fa-envelope"></i></span>
            <span>Business Mail</span>
        </a>
        <?php endif; ?>
        <?php if ( $database[$current_user]['linkedin_username'] ): ?>
        <a href="https://www.linkedin.com/in/<?php echo $database[$current_user]['linkedin_username'] ?>" target="_blank">
            <span class="icon"><i class="fab fa-linkedin"></i></span>
            <span>LinkedIn</span>
        </a>
        <?php endif; ?>
        <?php if ( $database[$current_user]['github_username'] ): ?>
        <a href="https://github.com/<?php echo $database[$current_user]['github_username'] ?>" target="_blank">
            <span class="icon"><i class="fab fa-github"></i></span>
            <span>GitHub</span>
        </a>
        <?php endif; ?>
        <?php if ( $database[$current_user]['website'] ): ?>
        <a href="<?php echo $database[$current_user]['website'] ?>" target="_blank">
            <span class="icon"><i class="fas fa-globe"></i></span>
            <span>Company Website</span>
        </a>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'footer.php'; ?>