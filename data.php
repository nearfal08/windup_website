<?php

$config = array();

$config['links'] = array(
    'home' => 'index.php',
    'games' => 'games.php',
    'news' => 'news.php',
    'about' => 'about.php',
    'contact' => 'contact.php',
);

function getSlides() {
    $news = array();
    
    return $news;
}
 
function getGames() {
    $games = gamesStore();
    
    return $games;
}

function getNews() { 
    $news = newsStore();
    return $news;
}

function gamesStore() {
    $games = array();
    
    $games['towers'] = array(
        'title' => 'Towers',
        'is_front' => true,
        'snippet' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'image' => 'images/tower_2.jpg',
        'image_alt' => 'Towers Game',
        'page_link' => 'towers.php',
        'banner_image' => 'images/orbit_banner.jpg',
        'app_image' => 'images/towers_app_icon.png',
    );
    
    $games['orbit'] = array(
        'title' => 'Orbit',
        'is_front' => true,
        'snippet' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'image' => 'images/orbit_2.jpg',
        'image_alt' => 'Orbit Game',
        'page_link' => 'orbit.php',
        'banner_image' => 'images/orbit_banner.jpg',
        'app_image' => 'images/towers_app_icon.png',
    );
    
    $games['endless'] = array(
        'title' => 'Endless Runner',
        'is_front' => true,
        'snippet' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'image' => 'images/endless_2.jpg',
        'image_alt' => 'Endless Runner Game',
        'page_link' => 'endless-runner.php',
        'banner_image' => 'images/orbit_banner.jpg',
        'app_image' => 'images/towers_app_icon.png',
    );
    
    $games['ball_shooter'] = array(
        'title' => 'Ball Shooter',
        'is_front' => true,
        'snippet' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'image' => 'images/shooter_2.jpg',
        'image_alt' => 'Ball Shooter Game',
        'page_link' => 'ball-shooter.php',
        'banner_image' => 'images/orbit_banner.jpg',
        'app_image' => 'images/towers_app_icon.png',
    );
    
    return $games;
}

function newsStore() {
    $news = array();
    
    $news[] = array(
        'title' => 'Orbit Prepares for Beta',
        'page_link' => 'news/orbit-prepares-for-beta',
        'is_front' => true,
        'snippet' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'date' => '13 Feb, 2018',
        'image' => 'images/orbit_1.jpg',
        'image_alt' => 'Orbit Beta',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac sem justo. Proin ullamcorper lacinia viverra. Proin vitae commodo mauris. Praesent id mattis purus, et vehicula est. Curabitur in commodo mi. Nunc pharetra eget ligula et dignissim. Phasellus pharetra turpis sit amet est lobortis accumsan. Vivamus et dui et ex gravida fermentum vitae vel justo. Nullam maximus accumsan metus, at porta lacus commodo ac. In hac habitasse platea dictumst. Pellentesque mattis lorem a neque varius, a scelerisque odio lobortis. Nam vehicula erat id velit dapibus accumsan. Nam a sem mauris. Etiam sed arcu nisl. Phasellus dignissim, felis ut semper venenatis, odio leo scelerisque ipsum, sit amet imperdiet eros sapien in tortor. Phasellus nec lorem augue.</p>

        <p>Ut facilisis ipsum nisi, quis interdum sapien sodales eget. Sed at lectus justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed pretium vestibulum viverra. Donec in est a nunc lobortis pharetra et non libero. Donec non neque at odio tempus vulputate sit amet quis ligula. Ut interdum diam in venenatis feugiat. Sed semper orci nec ipsum rhoncus, nec tincidunt lectus vulputate. Ut iaculis ex quis convallis dictum.</p>

        <p>Donec porttitor ligula urna, at sodales diam malesuada ac. Sed congue tempor enim quis luctus. Proin aliquam urna dictum erat hendrerit tempor. Donec imperdiet pharetra rhoncus. Ut sed ante et mauris scelerisque laoreet vitae a massa. Pellentesque hendrerit eu lectus sit amet cursus. Donec eget sollicitudin neque. Quisque sapien ex, egestas et commodo non, blandit et felis. Pellentesque vitae augue suscipit, fringilla augue eget, elementum enim. Suspendisse non nisl sit amet elit lacinia euismod. Fusce dapibus sapien ac consequat fringilla. Nulla et fringilla velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis ac odio nec neque tincidunt tincidunt vitae eu ipsum. Praesent imperdiet tellus enim, sed ultricies risus posuere iaculis. Mauris vehicula purus sed risus molestie egestas.</p>',
    );
    
    $news[] = array(
        'title' => 'Tower Stack Updates',
        'page_link' => 'news/tower-stack-updates',
        'is_front' => true,
        'snippet' => 'Fusce id facilisis nunc. Maecenas fringilla pharetra ex ac tristique.',
        'date' => '25 March, 2018',
        'image' => 'images/tower_1.jpg',
        'image_alt' => 'Tower Updates',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac justo rutrum neque ornare pellentesque. Fusce egestas viverra lorem, eu ullamcorper purus rutrum sit amet. In varius odio at tortor porta aliquet. Donec varius turpis ut feugiat iaculis. Aliquam pharetra sem ut egestas sagittis. Sed auctor tincidunt tempus. Nulla iaculis, purus quis tincidunt pellentesque, augue urna porttitor tellus, in dignissim turpis orci non nunc. Nullam rutrum sapien in urna faucibus, ut molestie risus facilisis. Nunc porta erat lorem, eget facilisis enim ornare at. Nam cursus sagittis rutrum.</p>

        <p>Fusce id facilisis nunc. Maecenas fringilla pharetra ex ac tristique. Fusce nulla elit, iaculis et nisi sodales, lacinia condimentum magna. Cras egestas, felis aliquam egestas pulvinar, est enim ultricies mi, quis aliquet libero enim id ex. Sed in enim metus. Aliquam et leo a arcu imperdiet porta. Ut ut iaculis nisl. Mauris egestas porta neque, in ullamcorper nisl commodo nec. Donec eget molestie quam. Aenean eget massa massa. Pellentesque commodo varius erat sed varius. Vivamus placerat sapien vitae lobortis porta. Phasellus ultricies id risus id venenatis. Sed semper lorem quis euismod rutrum. Nam laoreet semper sapien, id volutpat mauris interdum a.</p>',
    );
    
    $news[] = array(
        'title' => 'ER Begins Development',
        'page_link' => 'news/er-begins-development',
        'is_front' => true,
        'snippet' => 'Nulla venenatis rhoncus mauris, eget congue risus.',
        'date' => '3 April, 2018',
        'image' => 'images/endless_1.jpg',
        'image_alt' => 'Endless Runner Development',
        'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac sem justo. Proin ullamcorper lacinia viverra. Proin vitae commodo mauris. Praesent id mattis purus, et vehicula est. Curabitur in commodo mi. Nunc pharetra eget ligula et dignissim. Phasellus pharetra turpis sit amet est lobortis accumsan. Vivamus et dui et ex gravida fermentum vitae vel justo. Nullam maximus accumsan metus, at porta lacus commodo ac. In hac habitasse platea dictumst. Pellentesque mattis lorem a neque varius, a scelerisque odio lobortis. Nam vehicula erat id velit dapibus accumsan. Nam a sem mauris. Etiam sed arcu nisl. Phasellus dignissim, felis ut semper venenatis, odio leo scelerisque ipsum, sit amet imperdiet eros sapien in tortor. Phasellus nec lorem augue.</p>

        <p>Nulla venenatis rhoncus mauris, eget congue risus accumsan mollis. Duis bibendum maximus nulla vitae varius. Suspendisse consequat rutrum lorem. Nullam imperdiet dapibus laoreet. Aliquam quis dolor lacus. Nunc vitae maximus sem, a fermentum nulla. Ut tempor, augue mattis congue egestas, lectus arcu elementum ipsum, a aliquet odio metus vel mauris. In mattis condimentum placerat. Cras auctor ligula non euismod tincidunt. Vestibulum sed posuere sem, quis luctus urna.</p>

        <p>Donec porttitor ligula urna, at sodales diam malesuada ac. Sed congue tempor enim quis luctus. Proin aliquam urna dictum erat hendrerit tempor. Donec imperdiet pharetra rhoncus. Ut sed ante et mauris scelerisque laoreet vitae a massa. Pellentesque hendrerit eu lectus sit amet cursus. Donec eget sollicitudin neque. Quisque sapien ex, egestas et commodo non, blandit et felis. Pellentesque vitae augue suscipit, fringilla augue eget, elementum enim. Suspendisse non nisl sit amet elit lacinia euismod. Fusce dapibus sapien ac consequat fringilla. Nulla et fringilla velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis ac odio nec neque tincidunt tincidunt vitae eu ipsum. Praesent imperdiet tellus enim, sed ultricies risus posuere iaculis. Mauris vehicula purus sed risus molestie egestas.</p>

        <p>Donec egestas venenatis interdum. Fusce quis mi nisl. Nullam tincidunt aliquet ex, eget interdum urna finibus sed. Morbi mi dui, gravida et arcu lacinia, accumsan interdum arcu. Phasellus pulvinar felis ac elit lobortis, et fermentum purus malesuada. Quisque quis lacus ut nisi consequat interdum. Nam tortor erat, dapibus at quam ac, congue interdum purus. Maecenas sit amet dolor lorem. Curabitur fermentum, arcu sit amet imperdiet venenatis, magna arcu rutrum turpis, vitae fermentum risus dolor vehicula sem. Integer et gravida mi. Cras convallis, dolor nec pulvinar posuere, eros turpis bibendum orci, vel pulvinar eros ante in massa. Sed mollis ac tellus at porttitor. Pellentesque ornare quam a bibendum laoreet. Integer non ultricies nunc. Mauris tortor mi, pretium non posuere aliquet, posuere nec odio.</p>',
    );
    krsort($news);
    return $news;
}


?>