<?php
if (isset($_POST['EXIT'])) {
    $check = 0;
}
$check = 0;

if (isset($_POST['WRITING'])) {
    $check = 2;
    // Mảng chứa 9 câu tiếng Anh
    $WRITING_Task1 = array(
        "1.png",
        "2.png",
        "3.png",
        "4.png",
        "5.png",
        "6.png"
    );

    // Mảng chứa tên file âm thanh tương ứng
    $WRITING_Task2 = array(
        "1.png",
        "2.png",
        "3.png",
        "4.png",
        "5.png",
        "6.png"
    );

    // Tạo mảng chứa 9 số từ 1 đến 9
    $task1 = range(0, 5);
    $task2 = range(0, 5);

    // Trộn ngẫu nhiên mảng soundFiles
    shuffle($task1);
    shuffle($task2);
    // Lấy ra 4 phần tử đầu tiên của mảng
    $selectedTask1 = array_slice($task1, 0, 1);
    $selectedTask2 = array_slice($task2, 0, 1);
    // Hiển thị số file âm thanh được chọn
    echo "<br/>";
    echo "<h2>WRITING A2 NHẤN CTRL + P ĐỂ IN VÀ HỌC </h2>";
    if ($check == 2) {
        echo '<form action="" method="post" enctype="multipart/form-data">';
        echo '<button type="submit" name="EXIT" class="btn btn-blues btn-style btn-style-active">EXIT</button>';
        echo '</form>';
    }
    foreach ($selectedTask1 as $key) {
        echo "<h4 style='color:red'>Task1:</h4>";
        echo "<img src='./viet/part1/" . $WRITING_Task1[$key] . "'>";
        echo "<h4 style='color:red;'>Task2:</h4>";
        echo "<img src='./viet/part2/" . $WRITING_Task2[$key] . "'>";
    }
}
if (isset($_POST['SPEAKING'])) {
    $check = 1;
    // Mảng chứa 9 câu tiếng Anh
    $questions_part1 = array(
        "What’s your full name?	",
        "What’s your student number?",
        "How old are you?",
        "Where’s your hometown?",
        "What do you like doing in your free time?",
        "How do you travel to school?",
        "What’s your major?",
        "What would you like to do in the future?",
        "What are you studying?",
        "Can you introduce yourself?"
    );

    // Mảng chứa tên file âm thanh tương ứng
    $sounds_part1 = array(
        "1.mp3",
        "2.mp3",
        "3.mp3",
        "4.mp3",
        "5.mp3",
        "6.mp3",
        "7.mp3",
        "8.mp3",
        "9.mp3",
        "10.mp3"
    );

    // Tạo mảng chứa 10 số từ 3 đến 
    $Part1 = range(2, 9);
    // Trộn ngẫu nhiên mảng soundFiles
    shuffle($Part1);
    // Lấy ra 4 phần tử đầu tiên của mảng
    $Part1 = array_slice($Part1, 0, 3);



    // Tạo mảng chứa 10 số từ 3 đến 
    $Part2 = range(1, 6);
    // Trộn ngẫu nhiên mảng soundFiles
    shuffle($Part2);
    // Lấy ra 4 phần tử đầu tiên của mảng
    $Part2 = array_slice($Part2, 0, 2);



    // Mảng chứa 9 câu tiếng Anh
    $questions_part3 = array(
        "DESCRIBE YOUR FAVORITE SPORT",
        "DESCRIBE YOUR FAVORITE PLACE TO ENJOY YOUR FREE TIME",
        "DESCRIBE YOUR HOMETOWN",
        "TALK ABOUT THE WAYS TO STAY HEALTHY",
        "DESCRIBE YOUR DREAM HOUSE",
        "DESCRIBE A PIECE OF CLOTHING YOU LIKE",
        "DESCRIBE A FAMILY MEMBER YOU ADMIRE"
    );

    // Mảng chứa tên file âm thanh tương ứng
    $sounds_part3 = array(
        "1.mp3",
        "2.mp3",
        "3.mp3",
        "4.mp3",
        "5.mp3",
        "6.mp3",
        "7.mp3"
    );
    // Tạo mảng chứa 10 số từ 3 đến 
    $Part3 = range(0, 6);
    // Trộn ngẫu nhiên mảng soundFiles
    shuffle($Part3);
    // Lấy ra 4 phần tử đầu tiên của mảng
    $selectedPart3 = array_slice($Part3, 0, 1);


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện Thi AV A2 Kỹ Năng Nói & Viết</title>
    <script src="playerjs.js" type="text/javascript"></script>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <?php
        if ($check == 1 || $check == 2) {
            if ($check == 2) {
            } else {
                echo '<button type="submit" name="EXIT" class="btn btn-blues btn-style btn-style-active">EXIT</button>';
            }
        } else {
        ?>

            <button type="submit" name="SPEAKING" class="btn btn-blues btn-style btn-style-active">SPEAKING</button>
            <button type="submit" name="WRITING" class="btn btn-blues btn-style btn-style-active">WRITING</button>
        <?php
        }
        ?>
    </form>
    <?php
    if ($check == 0) {
    } else if ($check == 1) {
    ?>

        <h4>PART 1: Greeting</h4>
        <div id="part1"></div>
        <h4>PART 2: Social Interaction</h4>
        <h5>1. <?php
                switch ($Part2['0']) {
                    case "1":
                        echo "Hobbies";
                        break;
                    case "2":
                        echo "Transportation";
                        break;
                    case "3":
                        echo "Travel";
                        break;
                    case "4":
                        echo "Free time";
                        break;
                    case "5":
                        echo "School/ Study";
                        break;
                    case "6":
                        echo "Family";
                        break;
                }
                ?> </h5>
        <div id="part2con1"></div>
        <h5>2: <?php
                switch ($Part2['1']) {
                    case "1":
                        echo "Hobbies";
                        break;
                    case "2":
                        echo "Transportation";
                        break;
                    case "3":
                        echo "Travel";
                        break;
                    case "4":
                        echo "Free time";
                        break;
                    case "5":
                        echo "School/ Study";
                        break;
                    case "6":
                        echo "Family";
                        break;
                }
                ?></h5>
        <div id="part2con2"></div>

        <h4>PART 3: Description</h4>
        <div id="part3"></div>
</body>
<script>
    var part1 = new Playerjs({
        id: "part1",
        file: [{
                "title": "1. What’s your full name?",
                "file": "./amthanh/part1/1.mp3"
            }, {
                "title": "2. What’s your student number?",
                "file": "./amthanh/part1/2.mp3"
            },
            <?php
            $i = 2;
            foreach ($Part1 as $number) {
                $i++;
            ?> {
                    "title": "<?= $i . '. ' . $questions_part1[$number]; ?>",
                    "file": "./amthanh/part1/<?= $sounds_part1[$number]; ?>"
                },
            <?php } ?>
        ],
        loop: 1
    });
    var part2con1 = new Playerjs({
        id: "part2con1",
        file: [<?php
                switch ($Part2['0']) {
                    case "1":
                ?> {
                        "title": "a.    Do you have any hobbies? What are they?",
                        "file": "./amthanh/part2/1a.mp3"
                    }, {
                        "title": "b.	Do you have enough time for your hobby (hobbies)? Why (not)?",
                        "file": "./amthanh/part2/1b.mp3"
                    }, {
                        "title": "c.	Do you spend lots of money on your hobbies? Why (not)?",
                        "file": "./amthanh/part2/1c.mp3"
                    }
                <?php
                        break;
                    case "2":
                ?> {
                        "title": "a.	How do you travel to school or work?",
                        "file": "./amthanh/part2/2a.mp3"
                    }, {
                        "title": "b.	Do you prefer public transportation or private transportation? Why?",
                        "file": "./amthanh/part2/2b.mp3"
                    }, {
                        "title": "c.	What types of public transport are popular in your hometown?",
                        "file": "./amthanh/part2/2c.mp3"
                    }
                <?php
                        break;
                    case "3":
                ?> {
                        "title": "a.	Do you like traveling? Why?",
                        "file": "./amthanh/part2/3a.mp3"
                    }, {
                        "title": "b.	In which season do you prefer to travel? Why?",
                        "file": "./amthanh/part2/3b.mp3"
                    }, {
                        "title": "c.	What places have you visited up to now? How did you feel about the trips?",
                        "file": "./amthanh/part2/3c.mp3"
                    }
                <?php
                        break;
                    case "4":
                ?> {
                        "title": "a.	What do you usually do after school?",
                        "file": "./amthanh/part2/4a.mp3"
                    }, {
                        "title": "b.	How do you spend your weekends/ weekdays?",
                        "file": "./amthanh/part2/4b.mp3"
                    }, {
                        "title": "c.	Do you like listening to music/ reading books/ watching TV/ playing games? Why?",
                        "file": "./amthanh/part2/4c.mp3"
                    }
                <?php
                        break;
                    case "5":
                ?> {
                        "title": "a.	Do you get along with your classmates?",
                        "file": "./amthanh/part2/5a.mp3"
                    }, {
                        "title": "b.	What things do you like most when you study at your school?",
                        "file": "./amthanh/part2/5b.mp3"
                    }, {
                        "title": "c.	What things do you dislike when you study at your school?",
                        "file": "./amthanh/part2/5c.mp3"
                    }
                <?php
                        break;
                    case "6":
                ?> {
                        "title": "a.	Do you have a large family or a small family?",
                        "file": "./amthanh/part2/6a.mp3"
                    }, {
                        "title": "b.	Have you got any brothers and sisters?",
                        "file": "./amthanh/part2/6b.mp3"
                    }, {
                        "title": "c.	Who do you get along with your family?",
                        "file": "./amthanh/part2/6c.mp3"
                    }
            <?php
                        break;
                }
            ?>
        ],
        loop: 1
    });
    var part2con2 = new Playerjs({
        id: "part2con2",
        file: [<?php
                switch ($Part2['1']) {
                    case "1":
                ?> {
                        "title": "a.    Do you have any hobbies? What are they?",
                        "file": "./amthanh/part2/1a.mp3"
                    }, {
                        "title": "b.	Do you have enough time for your hobby (hobbies)? Why (not)?",
                        "file": "./amthanh/part2/1b.mp3"
                    }, {
                        "title": "c.	Do you spend lots of money on your hobbies? Why (not)?",
                        "file": "./amthanh/part2/1c.mp3"
                    }
                <?php
                        break;
                    case "2":
                ?> {
                        "title": "a.	How do you travel to school or work?",
                        "file": "./amthanh/part2/2a.mp3"
                    }, {
                        "title": "b.	Do you prefer public transportation or private transportation? Why?",
                        "file": "./amthanh/part2/2b.mp3"
                    }, {
                        "title": "c.	What types of public transport are popular in your hometown?",
                        "file": "./amthanh/part2/2c.mp3"
                    }
                <?php
                        break;
                    case "3":
                ?> {
                        "title": "a.	Do you like traveling? Why?",
                        "file": "./amthanh/part2/3a.mp3"
                    }, {
                        "title": "b.	In which season do you prefer to travel? Why?",
                        "file": "./amthanh/part2/3b.mp3"
                    }, {
                        "title": "c.	What places have you visited up to now? How did you feel about the trips?",
                        "file": "./amthanh/part2/3c.mp3"
                    }
                <?php
                        break;
                    case "4":
                ?> {
                        "title": "a.	What do you usually do after school?",
                        "file": "./amthanh/part2/4a.mp3"
                    }, {
                        "title": "b.	How do you spend your weekends/ weekdays?",
                        "file": "./amthanh/part2/4b.mp3"
                    }, {
                        "title": "c.	Do you like listening to music/ reading books/ watching TV/ playing games? Why?",
                        "file": "./amthanh/part2/4c.mp3"
                    }
                <?php
                        break;
                    case "5":
                ?> {
                        "title": "a.	Do you get along with your classmates?",
                        "file": "./amthanh/part2/5a.mp3"
                    }, {
                        "title": "b.	What things do you like most when you study at your school?",
                        "file": "./amthanh/part2/5b.mp3"
                    }, {
                        "title": "c.	What things do you dislike when you study at your school?",
                        "file": "./amthanh/part2/5c.mp3"
                    }
                <?php
                        break;
                    case "6":
                ?> {
                        "title": "a.	Do you have a large family or a small family?",
                        "file": "./amthanh/part2/6a.mp3"
                    }, {
                        "title": "b.	Have you got any brothers and sisters?",
                        "file": "./amthanh/part2/6b.mp3"
                    }, {
                        "title": "c.	Who do you get along with your family?",
                        "file": "./amthanh/part2/6c.mp3"
                    }
            <?php
                        break;
                }
            ?>
        ],
        loop: 1
    });
    var part3 = new Playerjs({
        id: "part3",
        file: [<?php
                foreach ($selectedPart3 as $number) {
                ?> {
                    "title": "<?= $questions_part3[$number]; ?>",
                    "file": "./amthanh/part3/<?= $sounds_part3[$number]; ?>"
                },
            <?php } ?>
        ],
        loop: 1
    });
</script>
<?php
    }
?>

</html>