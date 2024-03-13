<!DOCTYPE html>
<html>

<head>
    <title>Vin Portfolio</title>


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Russo+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('default.css')); ?>">
    <link id="theme-style" rel="stylesheet" type="text/css" href="<?php echo e(asset('')); ?>">
</head>

<body>

    <section class="s1">
        <div class="main-container">
            <div class="greeting-wrapper">
                <h1>Hi, I'm Vincent Kibet</h1>
            </div>


            <div class="intro-wrapper">
                <div class="nav-wrapper">

                    <!-- Link around dots-wrapper added after tutorial video -->
                    <a href="<?php echo e(url('contact.index')); ?>">
                        <div class="dots-wrapper">
                            <div id="dot-1" class="browser-dot"></div>
                            <div id="dot-2" class="browser-dot"></div>
                            <div id="dot-3" class="browser-dot"></div>
                        </div>
                    </a>


                    <ul id="navigation">
                        <li><a href="<?php echo e(url('/#contact')); ?>">Contact</a></li>

                    </ul>
                </div>

                <div class="left-column">
                    <img id="profile_pic" src="<?php echo e(asset('assets/vin.jpg')); ?>">
                    <h5 style="text-align: center;line-height: 0;">Personalize Theme</h5>

                    <div id="theme-options-wrapper">
                        <div data-mode="light" id="light-mode" class="theme-dot"></div>
                        <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
                        <div data-mode="green" id="green-mode" class="theme-dot"></div>
                        <div data-mode="purple" id="purple-mode" class="theme-dot"></div>
                    </div>

                    <p id="settings-note">*Theme settings will be saved for<br>your next vist</p>
                </div>

                <div class="right-column">

                    <div id="preview-shadow">
                        <div id="preview">
                            <div id="corner-tl" class="corner"></div>
                            <div id="corner-tr" class="corner"></div>
                            <h3>What I Do</h3>
                            <p>I'm a software developer proficient in both Frontend & Backend.</p>
                            <div id="corner-br" class="corner"></div>
                            <div id="corner-bl" class="corner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">

            <div class="about-wrapper">
                <div class="about-me">
                    <h4>More about me</h4>

                    <p>I build new software projects just to Create innovative solutions, solving problems, creating
                        efficiencies, advancing technology, fulfilling curiosity.</p>

                    <p> I'm also Passionate about coding, crafting elegant solutions, and contributing to progress as a
                        software developer.</p>


                    <hr>

                    <h4>TOP EXPERTISE</h4>

                    <p>Fullstack developer with primary focus on Backend <a target="_blank" href="resume.pdf">Download
                            Resume</a></p>

                    <div id="skills">
                        <ul>
                            <li>Python</li>
                            <li>Django</li>
                            <li>Java</li>
                            <li>Laravel</li>
                            <li>Javascript</li>
                        </ul>

                        <ul>
                            <li>RESTful APIs</li>
                            <li>IOT</li>
                            <li>Networking</li>
                            <li>Firebase</li>
                            <li>HTML/CSS</li>
                        </ul>

                    </div>

                </div>


                <div class="social-links">
                    <img id="social_img" src="<?php echo e(asset('assets/court1.png')); ?>">
                    <h3>Find me on Github & LinkedIn</h3>

                    <a target="_blank" href="https://github.com/vinkibe">Github: @vinkibe</a>
                    <br>
                    <a target="_blank" href="https://www.linkedin.com/in/vincent-korir-b499bb262">LinkedIn: @vinkibe</a>
                </div>
            </div>

        </div>
    </section>

    <section class="s1">
        <div class="main-container">
            <h3 style="text-align: center;">Some of my past projects</h3>

            <div class="post-wrapper">

                <div>
                    <div class="post">
                        <img class="thumbnail" src="<?php echo e(asset('assets/court3.png')); ?>">
                        <div class="post-preview">
                            <h6 class="post-title">Court System</h6>
                            <p class="post-intro">Designed & built a the court system</p>
                            <a target="_blank" href="https://github.com/vinkibe/django-court-system">Find on Github</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="<?php echo e(asset('assets/Jointde_2.png')); ?>">
                        <div class="post-preview">
                            <h6 class="post-title">Online developers group - Joint-dev</h6>
                            <p class="post-intro">Joint-dev with a coding console and real-time chat interface</p>
                            <a target="_blank" href="https://github.com/vinkibe/group_discussion">Find on Github</a>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="post">
                        <img class="thumbnail" src="<?php echo e(asset('assets/blog_3.png')); ?>">
                        <div class="post-preview">
                            <h6 class="post-title">Personal Blog</h6>
                            <p class="post-intro">this is ablog website built with laravel where I post my subject of
                                interest</p>
                            <a target="_blank" href="https://github.com/vinkibe/My-Personal-blog">Find on Github</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">
            <a href=""></a>
            <h3 style="text-align: center;">Get In Touch</h3>
            <div class="contact-form">
                <form action="<?php echo e(route('contact.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <!-- Name -->
                    <label for="name"><span>Name</span></label>
                    <input style="color:rgba(0, 2, 7, 0.856)" type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" />
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <!-- Email -->
                    <label for="email"><span>Email</span></label>
                    <input style="color:rgba(0, 2, 7, 0.856)" type="text" id="email" name="email" value="<?php echo e(old('email')); ?>" />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <!-- Subject -->
                    <label for="subject"><span>Subject</span></label>
                    <input style="color:rgba(0, 2, 7, 0.856)" type="text" id="Subject" name="subject" value="<?php echo e(old('subject')); ?>" />
                    <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <!-- Message -->
                    <label for="message"><span>Message</span></label>
                    <textarea style="color:rgba(0, 2, 7, 0.856)" id="message" name="message"><?php echo e(old('message')); ?></textarea>
                    <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p style="color: red; margin-bottom:5px; "><?php echo e($message); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <!-- Button -->
                    <input style="color:rgba(8, 20, 44, 0.856); background-color:rgba(0, 255, 255, 0.685)" type="submit" value="s u b m i t"/>
                </form>
            </div>

            
        </div>
    </section>

    <script type="text/javascript" src="script.js"></script>
</body>

</html>
<?php /**PATH /home/vin/Desktop/workspace/Laravel-Portfolio/resources/views/welcome.blade.php ENDPATH**/ ?>