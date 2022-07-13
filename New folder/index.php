<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myCV</title>
    <link rel="stylesheet" href="Style.css">
</head>
<?php

$informations = [
    'personal_info' => [
        'first_name' => 'Md Asaduzzaman',
        'last_name' => 'Shipon',
        'full_name' => 'Md Asaduzzaman Shipon',
        'profile_image' => '',
        'father_name' => 'Abdus Salam',
        'mother_name' => 'Shiuli Begummbr',
        'data_of_birth' => '18 Aug 2000',
        'gender' => 'Male',
        'marital_status' => 'Unmarried',
        'nationality' => 'Bangladeshi',
        'religion' => 'Islam',
        'blood_group' => 'A(+ve)',
        'address' => [
            'present_address' => '212/f , Lalbag Road, Lalbag Dhaka.',
            'permanent_address' => 'Jolagati, Kawkhali, Perojpur.'
        ],
        'contact' => [
            'email' => 'asaduzzamanshipon116@gmail.com',
            'mobile' => '01832258329'
        ]
    ],
    'academic_info' => [
        'ssc' => [
            'exam' => "SSC",
            'board' => 'Barisal',
            'year' => '2016',
            'institution' => 'Jolagati Muslim Adarsha Secondary School',
            'result' => '3.61 out of 5.00'
        ],
        'diploma' => [
            'exam' => "Diploma in Computer Technology",
            'board' => 'Dhaka',
            'year' => '2021',
            'institution' => 'Daffodil Polytechnic Institute',
            'result' => '3.59 out of 4.00'
        ],
    ],
    'skills' => [
        'programming' => 'PHP',
        'web' => '',
        'database' => 'mySQL',
        'scripting_lang' => '',
        'dev_tools' => '',
        'others' => ''
    ],
    'self_project' => [
        'project_one' => [
            'site' => 'https://asaduzzamanshipon.github.io/easyDeal/',
            'git' => 'https://github.com/AsaduzzamanShipon/easyDeal',
            'name1' => 'You Can Purchase This Item by One Click on Add to Cart.',
            'name2' => 'If You Want to Order This Products You Can Contact Us Through Email/Message.',
            'technology' => 'HTML, CSS.'
        ],
        'project_two' => [
            'site' => 'https://asaduzzamanshipon.github.io/coding',
            'git' => 'https://github.com/AsaduzzamanShipon/coding',
            'name1' => 'Here You Can Login or Sign up And Can learn so many Languages.',
            'name2' => 'Admin can add a new course for creative agency and he can make another admin.',
            'technology' => 'BOOTSTRAP, HTML, CSS.'
        ],
    ],
    // 'achivement' => [
    //     'type' => 'Technical in IT',
    //     'subject' => 'Google IT Support. (coursera.org), Technical Support Fundamentals.'
    // ],
    // 'language' => [
    //     'bangla' => 'Native Proficiency.',
    //     'english' => 'Professional Working Proficiency.'
    // ],
    // 'games' => [
    //     'first_game' => 'Table Tennis',
    //     'second_game' => 'Badminton'
    // ],
    // 'hobbies' => [
    //     'first_hobby' => 'Tree Plantation'
    // ],
    // 'references' => [
    //     'first_reference' => ''
    // ]
];

?>
<body id="cv">
    <main id="all">
        <table>
            <tr>
                <td>
                    <h1>
                        <?php
                        if (!empty($informations["personal_info"]["first_name"])){
                            echo $informations["personal_info"]["first_name"];
                        }
                        ?>
                    </h1>
                    <p>
                        <?php
                        if (!empty($informations["personal_info"]["contact"]["mobile"])){
                            echo "Call: " . $informations["personal_info"]["contact"]["mobile"]. "<br>" ;
                        }
                        if (!empty($informations["personal_info"]["contact"]["email"])){
                            echo "Email: " . $informations["personal_info"]["contact"]["email"]. "<br>" ;
                        }
                        if (!empty($informations["personal_info"]["address"]["present_address"])){
                            echo "House: " . $informations["personal_info"]["address"]["present_address"]. "<br>" ;
                        }
                        ?>
                    </p>
                    <p>
                        linkedin: <a href="https://www.linkedin.com/in/asaduzzaman-shipon-6604ab221/">https://www.linkedin.com/in/asaduzzaman-shipon-6604ab221/</a> <br>
                        github:  <a href="https://github.com/AsaduzzamanShipon">https://github.com/AsaduzzamanShipon</a> 
                    </p>
                </td>
                <td style="text-align: right; padding: 15px;">
                    <img id="image" src="Asaduzzaman.jpg" alt="">
                </td>
            </tr>
        </table>
        <table>
            <tr>
                    <h3>Career Objective</h3>
                    <hr>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ea voluptatem iste sapiente est, corrupti aperiam, dolorem, possimus id ex accusamus nesciunt. Possimus porro nam cum odit aut repudiandae temporibus fuga quisquam, ducimus aliquid ad maiores libero! Voluptatem quidem ullam quibusdam, necessitatibus iusto magnam ut, facere asperiores ex eos dolores optio dolorum cupiditate obcaecati quam?</p>
            </tr>
            <br>
            <tr>
                <h3>Present Status</h3>
                <hr>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ea voluptatem iste sapiente est, corrupti aperiam, dolorem, possimus id ex accusamus nesciunt. Possimus porro nam cum odit aut repudiandae temporibus fuga quisquam, ducimus aliquid ad maiores libero! Voluptatem quidem ullam quibusdam, necessitatibus iusto magnam ut, facere asperiores ex eos dolores optio dolorum cupiditate obcaecati quam?</p>
            </tr>
            <br>
            <tr>
                <?php 
                if (!empty($informations["academic_info"])){
                ?>

                <h3>Education</h3>
                <hr>
                <br>
                <table class="education">
                    <tr>
                        <th>Exam</th>
                        <th>Board/University</th>
                        <th>Year</th>
                        <th>Name of Institution</th>
                        <th>Marks</th>
                    </tr>
                    <tr>
                        <?php
                            if (!empty($informations["academic_info"]["ssc"])){
                                echo "<td class='education_td'>". $informations["academic_info"]["ssc"]["exam"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["ssc"]["board"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["ssc"]["year"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["ssc"]["institution"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["ssc"]["result"]. "</td>";
                            }
                        ?>
                    </tr>
                    <tr>
                        <?php
                            if (!empty($informations["academic_info"]["diploma"])){
                                echo "<td class='education_td'>". $informations["academic_info"]["diploma"]["exam"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["diploma"]["board"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["diploma"]["year"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["diploma"]["institution"]. "</td>";
                                echo "<td class='education_td'>". $informations["academic_info"]["diploma"]["result"]. "</td>";
                            }
                        ?>
                    </tr>
                </table>

                <?php 
                }
                ?>
            </tr>
            <br>
            <tr>
                <h3>Computer Skills</h3>
                <hr>
                <td>
                    Programming Languages :<br>
                    Web based skills      :<br>
                    Database skills       :<br>
                    Scripting skills      :<br>
                    Development Tools     :<br>
                    Others :<br>
                </td>
            </tr>
            <br>
            <tr>
                <h3>Professional Experience</h3>
                <hr>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ea voluptatem iste sapiente est, corrupti aperiam, dolorem, possimus id ex accusamus nesciunt. Possimus porro nam cum odit aut repudiandae temporibus fuga quisquam, ducimus aliquid ad maiores libero! Voluptatem quidem ullam quibusdam, necessitatibus iusto magnam ut, facere asperiores ex eos dolores optio dolorum cupiditate obcaecati quam?</p>
            </tr>
            <br>
            <tr>
                <?php 
                if (!empty($informations["self_project"])){
                ?>
                <h3>PERSONAL PROJECTS</h3>
                <hr>
                    <p>
                        <?php
                        if (!empty($informations["self_project"]["project_one"])){
                            echo "SITE: " .$informations["self_project"]["project_one"]["site"]. "<br>";
                            echo "GIT: " .$informations["self_project"]["project_one"]["git"]. "<br>";
                            echo "USED: " .$informations["self_project"]["project_one"]["technology"]. "<br>";
                            echo "<p style='padding-left: 25px;'>  ● " .$informations["self_project"]["project_one"]["name1"]. "<br>";
                            echo " ● " .$informations["self_project"]["project_one"]["name2"]. "<br></p>";
                        }
                        ?>
                        <?php
                        if (!empty($informations["self_project"]["project_two"])){
                            echo "SITE: " .$informations["self_project"]["project_two"]["site"]. "<br>";
                            echo "GIT: " .$informations["self_project"]["project_two"]["git"]. "<br>";
                            echo "USED: " .$informations["self_project"]["project_two"]["technology"]. "<br>";
                            echo "<p style='padding-left: 25px;'>  ● " .$informations["self_project"]["project_two"]["name1"]. "<br>";
                            echo " ● " .$informations["self_project"]["project_two"]["name2"]. "<br></p>";
                        }
                        ?>
                <?php
                }
                ?>
            </tr>
            <br>
            <tr>
                <h3>Achievements</h3>
                <hr>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero ea voluptatem iste sapiente est, corrupti aperiam, dolorem, possimus id ex accusamus nesciunt. Possimus porro nam cum odit aut repudiandae temporibus fuga quisquam, ducimus aliquid ad maiores libero! Voluptatem quidem ullam quibusdam, necessitatibus iusto magnam ut, facere asperiores ex eos dolores optio dolorum cupiditate obcaecati quam?</p>
            </tr>
            <br>
            <tr>
                <h3>Language</h3>
                <hr>
            </tr>
            <br>
            <br>
            <tr>
                <?php 
                if (!empty($informations["personal_info"])){
                ?>
                <h3>Personal Information</h3>
                    <hr>
                    <?php 
                    if (!empty($informations["personal_info"]["father_name"])){
                        echo "Father’s name : " .$informations["personal_info"]["father_name"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["mother_name"])){
                        echo "Mother’s name : " .$informations["personal_info"]["mother_name"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["data_of_birth"])){
                        echo "Date of Birth : " .$informations["personal_info"]["data_of_birth"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["gender"])){
                        echo "Gender : " .$informations["personal_info"]["gender"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["marital_status"])){
                        echo "Marital Status : " .$informations["personal_info"]["marital_status"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["nationality"])){
                        echo "Nationality : " .$informations["personal_info"]["nationality"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["religion"])){
                        echo "Religion : " .$informations["personal_info"]["religion"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["blood_group"])){
                        echo "Blood Group : " .$informations["personal_info"]["blood_group"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["address"]["present_address"])){
                        echo "Present Address : " .$informations["personal_info"]["address"]["present_address"]. "<br>";
                    }
                    if (!empty($informations["personal_info"]["address"]["permanent_address"])){
                        echo "Permanent Address : " .$informations["personal_info"]["address"]["permanent_address"]. "<br>";
                    }
                    ?>
                <?php 
                }
                ?>
            </tr>
            <tr>
                <h3>Hobbies</h3>
                <hr>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, possimus?</p>
            </tr>
            <br>
            <tr>
                <h3>Games</h3>
                <hr>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, optio?</p>
            </tr>
            <br>
            <tr>
                <h3>Reference</h3>
                <hr>
                    <b>Toufique Shafiqul Islam</b>
                    <p>BSC (Audit & Accounts)
                        Director (Research &
                        Development) <br>
                        Audit Bhaban, Kakrail, Dhaka. <br>
                        Cell: 01819154080 <br>
                        Email: <a href="nobe_bgt@yahoo.com">nobe_bgt@yahoo.com</a>
                    </p>
            </tr>
            <br>
        </table> <br> <br>
        <p style="text-align: right; padding-right: 100px;"><u>
            <?php
                if (!empty($informations["personal_info"]["first_name"])){
                    echo $informations["personal_info"]["first_name"];
                }
            ?>
        </u></p>
        <br>
        <br>
        <br>
        <p style="text-align: center;">Copyright © asaduzzaman, 2022 </p>
    </main>
</body>
</html>