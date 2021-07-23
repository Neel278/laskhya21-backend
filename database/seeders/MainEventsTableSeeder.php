<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainEventsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('mainevents')->insert([
      'name' => 'IT Quiz',
      'price' => 30,
      'img' => '1ZVSNC2p1aCQ7IZaiG_X7_kw6tMnsSKxj',
      'big_img' => '1tNTdBTbQbhdmbV1e5eHyxJIzidyctx2W',
      'rulebook' => 'https://drive.google.com/file/d/1BEDTXZyFskqWQA1YHU5fqVYx-aqLcftd/view?usp=sharing',
      'allevents_id' => '1795471',
      'platform' => 'MS Teams <br/> Google Forms',
      'participants' => 'Individual (solo)',
      'overview' => "The 'IT QUIZ' is a quiz competition, which is based on IT-related
          questions. The skills like basic knowledge computing, etc. will be
          tested here. There will be 3 rounds.",
      'event_structure' => '<li className="event-text__structure--list-item">
              Round 1: <br /> ● This round consists of simple multiple-choice
              questions. Google form will be provided for the quiz.
              <br />● Participants have to submit the response within the given
              time limit.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● There will be a live PPT-based quiz on MS Teams,
              participants would have to answer the question shown on PPT.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● There will be a Coding based multiple-choice
              questions quiz. Further instructions will be given on the day of
              the event.
            </li>',
      'rules' => "● In case of any conflict or misconduct, decisions taken by the
            management will be final and no excuses will be entertained.<br />● No extra time will be provided to any participant under any circumstances. <br />● If any of the students will have the same points then evaluation will be done considering the time taken to
            complete the task. <br />● Participants have to turn on their camera
            in rounds 2 & 3. <br />● For rounds 2 & 3 further instructions will
            be given on the day of the event.",
      'criteria' => "● In Round 1, participants will get 1 mark for correct answers &
            lose 0.25 marks <br />● on incorrect answers. <br />● The winner
            will be declared after considering points from each round. <br />●
            In case of the same marks, submitting time will be considered for
            judging. <br />● In rounds 2 and 3 participants will be judged based
            on the correct answer & in <br />● Participants will be judged based
            on the number of questions they solve and time taken by them i.e if
            any two contestants end up solving the same number of questions then
            the one who took less time will be prioritized.",
      'rewards' => "● Top three winners from the final round will get exciting prizes
            and winning certificates. <br />● All participants who attended the
            event will get a participation certificate.",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Java Guru',
      'price' => 40,
      'img' => '191yYn6r5a6oIFc0LQ020-ffxPGvcZ2Wc',
      'big_img' => '1jCBlATBMW8MrmWESt15cgy9T_G7q1ucQ',
      'rulebook' => 'https://drive.google.com/file/d/1QroCcbDCz-X1voB3zFlIUUWNWstrQepi/view?usp=sharing',
      'allevents_id' => '1795478',
      'platform' => 'Round 1: Google Forms <br/>Round 2: CodeForces/CodeChef <br/>Round 3: MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => "Java Guru is a language-based competition, testing one's knowledge of the language and programming fundamentals in it.",
      'event_structure' => '<li className="event-text__structure--list-item">
              Round 1: <br /> ● This round consists of MCQ questions which will have to be completed in due time. The questions will be based on Problem Solving and Object Oriented Programming.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● This round will be a real-time programming contest. It consists of problems to be solved by submitting Java code on CodeForces / CodeChef within due time.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● This round is a mock interview based on your coding skills via MS Teams.
            </li>',
      'rules' => "● Rules for rounds 2 and 3 will be declared on the date of the event.<br /> ● In case of any conflict or misconduct, decisions taken by the management will be final and no excuses will be entertained.",
      'criteria' => "● Participants will be judged based on the number of questions they solve and time taken by them i.e if any two contestants end up solving the same number of questions then the one who took less time will be prioritized.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates.<br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Web-O-Thon',
      'price' => 60,
      'img' => '1aOKvuB7jZ_EFi7XsPyQ2FSboBybhVEKc',
      'big_img' => '1j6eUl5dxUOBKhZI4AdcgWrBVLL4LZX0h',
      'rulebook' => 'https://drive.google.com/file/d/1IktIgkLzWVh3CqocvlhBZwIV2HjQxtgL/view?usp=sharing',
      'allevents_id' => '1784072',
      'platform' => 'Round 1: MS Teams,Google Forms <br/>Round 2: MS Teams <br/>Round 3: MS Teams',
      'participants' => '2-3 members per team',
      'overview' => 'WEB–O–THON is an event that tests your skills and embraces you to the
          world of web designing and web development by using multidimensional
          skills in HTML, CSS, and backend along with teamwork and presentation
          skills.
          <br />
          <b>Problem Statement:</b> <br />
          ● WEB–O–THON is a team event where web enthusiasts can participate in a
          team of 2 or 3. Topics will be given to each team before the
          competition starts. Points will be given after each round based on the
          given criteria. Points from the previous round will be carried forward
          to the next round.',
      'event_structure' => '<li className="event-text__structure--list-item">
              Round 1: <br /> ● In the first round, participants are required to develop the frontend and its structure using HTML, CSS, and JavaScript (You can also use Bootstrap).<br/> ● The time period for round 1 will be decided on the day of the event.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In the second round, participants are required to develop the backend and connect it with the frontend using any programming language. E.g. PHP, Python, etc.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● In the third round, participants are required to present the final version of their work to the judges. Some simple questions will be asked.
            </li>',
      'rules' => "● Every participant will have to join the discord server for all the updates, queries, and evaluation processes. (server link will be provided before the
            event via mail)<br /> ● Every participant must be present in the Inauguration Ceremony and Final presentation. <br />● Different topics will be given to each team in the inauguration ceremony. <br />● Participants cannot use ready-made templates. If anyone is found breaking this rule then the whole team will be disqualified. <br />● After each round participants will have to submit screenshots (in single pdf) and screen recording(.mp4). Google form will be provided for the same. <br />● The winner will be declared after considering points from each round.",
      'criteria' => "<b>The teams will be judged based on:</b> <br />● Creativity <br />● Time Management <br />● In-depth knowledge of the code <br />● Vision <br />● Programming skills <br/>● Teamwork <br />● Presentation skill",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Code Race',
      'price' => 30,
      'img' => '15f3qLRtvxlH-dmPBIrIehR7Qk2YJw1uv',
      'big_img' => '1kCe1fCVuD5hTqKVN7o8K6ncBLdvCbOXP',
      'rulebook' => 'https://drive.google.com/file/d/1_LFqg0a9QbQSmMGBVj6Z3TMhIYicTb1_/view?usp=sharing',
      'allevents_id' => '1795492',
      'platform' => 'Round 1 & 2: CodeForces/CodeChef',
      'participants' => 'Individual (solo)',
      'overview' => 'CodeRace is a speed contest wherein participants will be given various questions of Competitive Programming.',
      'event_structure' => '<li className="event-text__structure--list-item">
              Round 1: <br /> ● Participants have to solve simple algorithmic questions and questions based on coding. The difficulty level of the round will be moderate.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Difficulty level would be a little harder compared to Round 1. And questions would be of a similar type.
            </li>',
      'rules' => "● Ensure that you are attempting the test using the correct Mail ID. <br/>● You must click submit after you answer each question. <br />● Once the test has started, the timer cannot be paused. You have to complete the test in one attempt. <br/>● Do not close the browser window or tab of the test interface before you submit your final answers. <br/>● It is recommended that you attempt the test in an incognito or private window so that any extensions installed do not interfere with the test environment. <br/>● We recommend that you close all other windows and tabs to ensure that there are no distractions. <br/>● Participants will not be allowed to communicate,share ideas or solutions with other participants. <br/>● Participants are not allowed to use multiple accounts and have to take part in the contest using their personal and single account.",
      'criteria' => "● First on number of problems solved (more is better); <br/>● In the case of a tie, the total time for all accepted submissions is taken into account (less is better). <br/>● Time is measured from the beginning of the contest until the submission was accepted by the jury, where each rejected submission adds 20 minutes penalty time. <br/>● If there is still a tie, the time of acceptance for the last problem solved matters (less is better) <br/>● The test is considered passed if running the program terminated with the return code 0, the process fits into the given time and memory limits and besides, the program printed the correct answer to the given test. The table below gives the most frequent verdicts of possible errors. <br/> <i>Memory limit exceeded :</i> <br/>● The program tries to consume more memory than is indicated in the problem statement <br/> <i>Time limit exceeded :</i> <br/>● The program hadn't terminated in time indicated in the problem statement <br/> <i>Runtime error :</i> <br/>● The program terminated with a non-zero return code (possible reasons: array out of bound error, division by zero, stack overflow, incorrect pointers usage, etc) <br /><i>Wrong answer :</i> <br/>● Your answer is incorrect <br /><i>Idleness limit exceeded :</i> <br/>● The program didn't use the CPU time for considerable time",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br />● All participants who attended the event will get a participation certificate.",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Debug IT',
      'price' => 40,
      'img' => '1pgXgCh2ECZu9fYOK6oWkCTsz52_-tMUZ',
      'big_img' => '1lB7cmVhrK26YwyoUfodf6opVjEy2ZanK',
      'rulebook' => 'https://drive.google.com/file/d/1YhW8caK8CtZdoNzyM-u3pyxe4vHsxesk/view?usp=sharing',
      'allevents_id' => '1795481',
      'platform' => 'Round 1 & 2: CodeChef/Codeforces',
      'participants' => 'Individual (solo)',
      'overview' => 'All the coding enthusiasts do enjoy removing errors and bugs from the code, if you also do then this event is for you. In this, you will be given a code and you need to find out all the bugs/errors in the code.
          <br />
          <b>Problem Statement:</b> <br />
          ● Code in C++ / Python will be given to the participant and they have to fix errors/bugs, remove useless code, add some logic to the given code so that the desired output for the given problem can be generated.',
      'event_structure' => '<li className="event-text__structure--list-item">
              Round 1: <br /> ● In Problem statement a code with syntax / logical error will be given and they have to find that error, correct it and submit it on the decided platform
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In this round, the qualified participants will be given problems with some syntax / logical errors as in previous rounds and additionally there will be some useless code so they have to find all those errors as well as useless parts of code and fix/remove it, and submit it.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● The round is the same as the previous round and additionally there will be some hint for some part of the code to be added so, they have to find all those error/ useless parts of code and fix/remove it and add the remaining logic and submit it.
            </li>',
      'rules' => "● Code will be given in C++ / Python language. You have to submit the corrected code in the language you selected while registering. <br />● Variable names in the submitted code should be the same as in the given code (You can remove any variable if found not useful or also change its value but you are not allowed to change its identifier). <br />● The judges’ verdict will be final.",
      'criteria' => "● All problems carry an equal weightage of 1 point. <br/>● The penalty for the wrong submission will be 10 minutes. <br/>● Total time taken by the participant to solve problems will be considered (time taken till last AC + penalty). <br />● Participants having the highest score will be having a higher rank, in case of an equal score, one with minimum penalty will break the tie.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br />● All participants who attended the event will get a participation certificate",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Crack The Code',
      'price' => 60,
      'img' => '1KKman8ZTpBNfXBbrv_Lrox2wJklFKG4X',
      'big_img' => '1HTF-wkwwkxRW6oSK0nk4v-7Qpmzn3PE2',
      'rulebook' => 'https://drive.google.com/file/d/199Vxf2JC0jpRLWhuY-AqyTdHIE_48KxC/view?usp=sharing',
      'allevents_id' => '1795488',
      'platform' => 'CodeForces/CodeChef',
      'participants' => 'Team of 2',
      'overview' => 'It will be the event in which the participants have to use their intuition to identify the behavior of hidden code with the help of test cases and hints and have to submit the correct solution.
          <br />
          <b>Problem Statement:</b> <br />
          ● Participants will be given a few problems in the round. For each problem they will be given input and output format and many test cases that will help them to know the solution of the given problems. So basically participants have to crack a pattern from given cases and submit their code.',
      'event_structure' => '<li className="event-text__structure--list-item">
              Practice Round: <br /> ● This round is just so that teams can understand the event properly and no scoring of this round will be counted.(Before the date of an event)
            </li>
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In this round, the teams will be provided with input/output format and the test cases and they have to guess the solution from it. Moreover, they will be provided with hints periodically
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In this round, teams will also have to guess the input with the code, we will just provide I/O format. They have to give an input file for which we will provide output and from that, they have to crack the code.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● This round\'s details will be shared on the day of the event.
            </li>',
      'rules' => "● Participants cannot communicate with any other teams while the round is going on. <br />● Only those participants who have provided their username of the respective platform will be considered for evaluation. <br/>● Participants cannot take part using multiple accounts. If any such case is found, the participant will be immediately disqualified. <br/>● In any case of dispute, the decision of the management team will be considered final.",
      'criteria' => "● If the submission of participants is accepted then i.e. their output matches our output. Then they will get a rank based on the time they did on CodeForces/CodeChef.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br />● All participants who attended the event will get a participation certificate.",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'CodeWars',
      'price' => 30,
      'img' => '18oJD7vh2Nz5KI1hezlAPsMLY18QSD2P1',
      'big_img' => '110I40_pgXMutCiTInRTWJ93qMW6EbjgN',
      'rulebook' => 'https://drive.google.com/file/d/1ZGIiGC7hcB4ytv5EG7VKoUGp8aJZXWdY/view?usp=sharing',
      'allevents_id' => '1795483',
      'platform' => 'CodeChef',
      'participants' => 'Individual (solo)',
      'overview' => 'CodeWars is a programming contest based on Data Structures and Algorithms and problem-solving having an easy to medium difficulty level.',
      'event_structure' => '<li className="event-text__structure--list-item">
              Round 1: <br /> ● You will have a few problems based on DSA(Data Structures and Algorithms) and problem-solving of increasing difficulty on a platform called CodeChef. <br/>● The ranking and the results will be shown on CodeChef itself.
            </li>',
      'rules' => "● Individual Participation would be required to take part in the contest <br/>● Ranking would be based on ICPC Style Rank List (For more details: https://www.codechef.com/rankings) <br/>● Contest would be hosted on the CodeChef Platform. (https://www.codechef.com/hostyourcontest).",
      'criteria' => "● Participants will be ranked based on the score they get. In case of a tie, the rankings will be determined by 'Total Penalty', which is the sum of the total time elapsed when you submitted the correct submission plus a penalty of 'X' minutes for every rejected submission (Wrong answer, Time limit exceeded, Runtime Error) for a problem you solved. The lower your Total Penalty, the better position you occupy.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br />● All participants who attended the event will get a participation certificate.",
      'event_id' => 1
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Circuit Mania',
      'price' => 40,
      'img' => '1-2fF-qcAFkY55HTKG4v7WV_8u76DvQVj',
      'big_img' => '1H9uvNvMa72HPurZb834XT5RQWmEf6sjD',
      'rulebook' => 'https://drive.google.com/file/d/1FX8O0xPCSuluc0d2qLXVHwQOnf4nmvOF/view?usp=sharing',
      'allevents_id' => '1795493',
      'platform' => 'Round 1: Google Forms, MS Teams <br/>Round 2 & 3: Simulation-Multisim (link will be provided)',
      'participants' => 'Individual (solo)',
      'overview' => 'Circuit Mania is the implementation of the electronic circuits on a breadboard. Participants are required to complete a given circuit in the least time.
          <br />
          <b>Problem Statement:</b> <br />
          ● Problems based on digital networks and circuits will be provided to participants, they have to submit them within a time limit.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: Technical Aptitude Test<br /> ● A quiz on digital networks and circuits will be given to participants. They have to submit it within the time limit. There will be MCQs and short answers questions
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Circuit Design <br /> ● The second round consists of three tasks. Participants will be provided to solve the questions on the simulation. Simulation link will be provided <br/>● Participants will be given circuit/equations to solve in a given time limit. <br/>● For the 2nd round, participants will have to make a video of a maximum of the 30s of circuit simulation and make a pdf of the output of the circuit & paperwork.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: Final Round<br /> ● This round also consists of a few tasks. This round is the same as above but the circuit/equations will be different and more complex
            </li>',
      'rules' => "● There will be a short interactive session about the event before 10 min of every round. All the information and doubts will be clear in this interactive session. <br/>● You will have to use Multisim for simulation of circuits. <br/>● Participants have to be ready with their equipment (laptop/mobile/pc) and a good internet connection. <br/>● Those who are selected for round 2 must be present at the allotted time. If the participant is absent, he/she will be disqualified. <br/>● The circuit video quality should be good and the video should be properly visible otherwise we might ask you to resend it or will not consider it at all. <br/>● If any of the participants will have the same points then the evaluation will be done considering the time taken to complete the task. <br/>● No extra time will be provided to any participant under any circumstances. <br/>● We are monitoring every participant during this event and if any participant tries to do copy or any malfunctioning then that participant will be disqualified. <br/>● In any case of dispute, the decision of the management team will be considered final. <br/>● The participant with the least time consumed to complete the task will be WINNER. <br/> ● Organizers will have the authority to change the rules under certain conditions.",
      'criteria' => "● The second round consists of three tasks, their solution will be checked and the winner will be announced. <br/>● In the third round, a cross-question may be asked to take the final decision.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 2
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Techno Sense',
      'price' => 40,
      'img' => '1Xd6r5uj1LS5JgOrvlhdcDox_qmUbeNxY',
      'big_img' => '10fUV84n1svBYIRWo7uu24mBusA6WF_mp',
      'rulebook' => 'https://drive.google.com/file/d/1C-gKvjQ_se-9nYljWUiosUYdp2xhrvrI/view?usp=sharing',
      'allevents_id' => '1784161',
      'platform' => 'Google Forms <br/>MS TEAMS',
      'participants' => 'Individual (solo)',
      'overview' => 'This event is based on the students’ knowledge of complicated circuits, network designing, and managing techniques.
          <br />
          <b>Problem Statement:</b> <br />
          ● Problems based on electrical networks and circuits will be provided to participants, they have to submit them within a time limit.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: Networkvita<br /> ● A quiz on electrical networks and circuits will be given to participants. They have to submit it within the time limit.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Taskmaster <br /> ● Participants will be provided two tasks which will be more complicated than the previous one. Participants have to submit their solutions in PDF Format.(Tasks based on circuits will be given on the day of an event).
            </li>
            <li className="event-text__structure--list-item">
              Round 3: Live Quiz<br /> ● A live quiz will be taken, questions will be based on electrical networks and circuits. The winner will be declared based on the point scored in this round.
            </li>',
      'rules' => "● There will be a short interactive session about the event before 10 min of every Round. All the information and doubts will be clear in this interactive session. <br/>● In case of cheating, any type of violence student will be disqualified from competition & will not be able to receive any certificate. <br/>● In any case of dispute, the decision of the management team will be considered final. <br/>● Students have to submit their answers within the time limit. <br/>● If any of the students will have the same points then the evaluation will be done considering the time taken to complete the task. <br/>● No extra time will be provided to any participant under any circumstances.",
      'criteria' => "● The evaluation of the first round will be done by considering how many points the participant has got within the time limit. The second round consists of two tasks, their solution will be checked, and based on 3rd round’s point, winners will be declared.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 2
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Arduino Hackathon',
      'price' => 40,
      'img' => '1Co1eXTtkgSXR8Cgxq5oZ6BjW2KyuG8bD',
      'big_img' => '1dWn8qMCk5_sYRBJzMZySNQhQ_2CT1B5r',
      'rulebook' => 'https://drive.google.com/file/d/1ngEar0Z5VQAqfPezzSn2TCBf5mGAZIIC/view?usp=sharing',
      'allevents_id' => '1795495',
      'platform' => 'Round 1- Google Forms <br/>Round 2- For Simulation- TinkerCad <br/>For Submission- Google Form <br/>Round 3 - MS Teams for Interactive Session',
      'participants' => 'Individual (solo)',
      'overview' => 'You will be provided with a real-life problem. You are required to design and simulate a circuit with Arduino as a part of it in TinkerCad to solve the problem statement and submit it in the least time.
          <br />
          <b>Problem Statement:</b> <br />
          ● As the name already suggests the questions will be based on topics related to Arduino like <br/>● Arduino Architecture <br/>● Types of Arduino <br/>● Working and Functions of Arduino <br/>● Arduino History <br/>● Code for Arduino IDE and Simulation.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● There will be some coding questions related to Arduino. <br/>● Participants need to solve it and submit it in the given time duration. <br/>● Link to submit answers will be given to all participants through mail or message.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● You have to make the circuit diagram and simulate the code. <br/>● If we find difficulty sorting the top 3 in round 2 then we will schedule a 3rd round in which there will be a one - one session about the circuit you designed.
            </li>',
      'rules' => "● There will be a short interactive session about the event before every round. All the information and doubts will be clear in this interactive session. <br/>● You will have to use TinkerCad for the simulation of the circuit. <br/>● You will have to make a PDF of the Screenshot of your code and circuit diagram. <br/>● You will have to make a video of the maximum 30s of your circuit simulation. <br/>● Your circuit video quality should be good and the video should be visible properly otherwise we might ask you to resend it *OR* not consider it at all. <br/>● Your codes should be properly written. <br/>● Those who are selected for further rounds must be present at the mentioned time. If the participant is absent, he/she will be disqualified.",
      'criteria' => "● The 1st round would be a qualifying round. As the Problem Statement would be easy the results would be judged on a time basis. <br/>● Another factor will be the presentation of your circuit.The decision taken from the manager of the event will be final. Any disregard or disrespect of the decision will cause elimination from the event.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 2
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Clocked',
      'price' => 40,
      'img' => '1tblosvezfCvkgP-rM6ujUk1t5TpLJp_4',
      'big_img' => '1BH5oYDWKs9O9hNxjZd4NUqZ_iQIuvcAh',
      'rulebook' => 'https://drive.google.com/file/d/1RVPLgd1L7xaku1Ar7diZL3djA-25gXB1/view?usp=sharing',
      'allevents_id' => '1795496',
      'platform' => 'Round 1- Google Forms. <br/>Round 2- For circuit design - virtual lab / PSIM / (every circuit/lectric circuit studio) for android. <br/>Round 3- For simulation- PSIM/multisim/ (every circuit/electric circuit studio)',
      'participants' => 'Individual (solo)',
      'overview' => 'The purpose of this clocked event is to boost your performance and accuracy with a specific least time limit. So that, you will be provided with a real-life problem. You are required to analyze and simulate a circuit on an online platform to solve the problem statement and submit it in the least amount of time.
          <br />
          <b>Problem Statement:</b> <br />
          ● The questions will be based on topics related to: <br/>● Electric Circuit/Electronics <br/>● Electrical circuit and network. <br/>● Digital circuit design.<br/>● Circuit/component/output identification for an electronic. <br/>',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Circuit/component/output identification round.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Circuit Design <br /> ● Three digital circuit designs on virtual lab / PSIM / (every circuit/electric circuit studio) for android.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Circuit Simulation <br /> ● Two electrical and electronics network/ Circuit Simulation on PSIM/multisim/(every circuit/electric circuit studio) for android.
            </li>',
      'rules' => "● You will have to use PSIM/multisim/(every circuit/electric circuit studio) for android for simulation of the circuit. <br/>● You will have to make a PDF of the screenshot of your circuit diagram (without Edit). <br/>● You will have to make a video of a maximum of 40s of your circuit simulation (video size will be limited). <br/>● Your circuit video quality should be good and the video should be visible properly otherwise we might ask you to Resend it *OR* not consider it at all. <br/>● Your submission will be accepted within a particular time limit. <br/>● If you have any other issues like (network, software related and any other issues) so, we can’t extra time for that. <br/>● Any misbehavior of a participant during any rounds may lead to elimination from the round he/she is currently in.",
      'criteria' => "● The 1st round would be a qualifying round. <br/>● As the Problem Statement would be easy the results would be judged on a time basis. <br/>● Another factor will be the presentation and accuracy of your circuit. <br/>● Their solution will be checked and the winner will be announced on a timely basis.",
      'rewards' => '● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate
            <br />
            <b>LINK FOR SOFTWARE:</b>
            <br />
            <a href="https://play.google.com/store/apps/details?id=com.ecstudiosystems.electriccircuitstudio"><i>Electric Circuit Studio</i></a><br/>
            <a href="https://play.google.com/store/apps/details?id=com.everycircuit.free"><i>Every Circuit</i></a>',
      'event_id' => 2
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Chem-Q',
      'price' => 30,
      'img' => '1YaqNGE45X99rXF5AK2yi8PE9qZuYBUOH',
      'big_img' => '15cmjUrTL9DJa8eFSLKC3myUg-rLnqY3f',
      'rulebook' => 'https://drive.google.com/file/d/1eMUsGZVUteNkzIhnumXjFLeT5wVyIAGk/view?usp=sharing',
      'allevents_id' => '1795502',
      'platform' => 'Round 1- Google Form, MS Teams <br/>Round 2- MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'There will be a quiz based on Chemical-basics and Chemical Engineering related problem-solving questions.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Before the event there will be an introductory session in which we will provide information regarding the event, quiz and rules & regulation.
            </li>
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In this round there will be objective type questions given which should be completed in due time. Google Form will be provided for the submission.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● The 2nd round is based on the fastest finger first. <br/>● In this round quiz manager will ask questions and priority to five the answer will be given to the one who will raise his/her hand first (fastest finger first round). There will be a negative marking for each wrong answer. (MS TEAMS).
            </li>',
      'rules' => "● Quiz link will be provided before the round starts. <br/>● Round 2 will be conducted in MS TEAMS. <br/>● Candidates will be disqualified if he/she disobeys the instructor’s rules. <br/>● In case of any conflicts, misbehaviour, or misconduct; the decision taken by the management team will be considered as final.",
      'criteria' => "● Participants who are qualified in the first round will be eligible for the second round and in the second round who will get more marks, will be declared as the winners. <br/>● Also accuracy and time constraints will be taken into consideration for the evaluation purpose.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate",
      'event_id' => 3
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Chem-O-Hunt',
      'price' => 60,
      'img' => '1XdIs94MbE3wX8PaCGIucWo6umPbBDA8U',
      'big_img' => '1AfSOuyJSC4tVFUMTdoZzbaRuBWG-oLgs',
      'rulebook' => 'https://drive.google.com/file/d/1e1us4udDYI-jiVg2UeXoUnAngwFqOGqK/view?usp=sharing',
      'allevents_id' => '1795504',
      'platform' => 'Google forms <br/> MS Teams',
      'participants' => 'Team of 2-3',
      'overview' => 'It is a treasure hunt in which questions related to chemistry or chemical engineering will be given to the participating teams and they need to solve the clues and head to the final round.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● We will provide a few pdfs. All the pdfs will be protected by password. Answer of the given que will be the password of the next pdf, which will show the next question and it leads to the final answer. <br />● Final answer is to be submitted through google form within a given time limit.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Team who finishes the 1st round first will qualify for the 2nd which follows the same methodology. Further instructions will be given on the day of the event.
            </li>',
      'rules' => "● All the pdfs will be protected by password. <br/>● All passwords are of one word, capital alphabet, no space, no character, no number. <br/>● Password of second pdf is answer of first pdf question. This process will be repeated for all PDFs.",
      'criteria' => "● The answer of the question in the last pdf should be submitted in their respective google forms. <br/>● Based on the Accuracy and the time, winners will be decided.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate",
      'event_id' => 3
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Chem-E-Twist',
      'price' => 60,
      'img' => '1-voO0kE3X-FRQ1hkV0AuCG9RV_OMVxQz',
      'big_img' => '1bDvPhMiB22PClAS-K24klVT42kIUZ6tI',
      'rulebook' => 'https://drive.google.com/file/d/1UTcrsX2iCAtzc5IN1OW9HeERJNeN1_Zh/view?usp=sharing',
      'allevents_id' => '1795513',
      'platform' => 'MS Teams',
      'participants' => 'Team of 2-3 members',
      'overview' => 'Chem -E- Twist is an event which tests your technical, aptitude, industrial and analytical knowledge. This game will require teams to think on their feet as after every round.
          <br />
          <b>Problem Statement:</b> <br />
          ● This game tests your presence of mind and observation skills. You have to face a kind of twist in every round. There will be three rounds.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Speed based Quiz which contains basic questions of technical( related to chemical engineering) and aptitude. <br/>● Answer of the questions will be the password of the pdf file which you need to open to move forward. Every pdf’s password is the previous question’s ans.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● There will be a figure-based question related to Industries based on Chemicals. <br/>● Interesting thing is that It is a Fast Figure First round.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● This round is basically a Group Discussion round. <br/>● Group discussion topics will be related to the Chemical industry. Further instructions will be given on the day of the event.
            </li>',
      'rules' => "● All rounds will be conducted in the Microsoft teams. <br/>● All question’s pdfs will be provided in group before the event starts. <br/>● In case of any conflict or misconduct, decisions taken by the management will be final and no excuses will be entertained. <br/>● The quiz should be submitted within the time, no excuses will be accepted",
      'criteria' => "● Accuracy and timings <br/>● Knowledge related to Chemical engineering and related fields",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 3
    ]);
    DB::table('mainevents')->insert([
      'name' => 'ChemiScribble',
      'price' => 30,
      'img' => '1_dknM22hAVqImt-v4cxCnjN9Yz_H9UK1',
      'big_img' => '1KMg-KiGEPnpufeAhkmTyZXucQZo59JIi',
      'rulebook' => 'https://drive.google.com/file/d/19gHGvG12wAJPfe_cc3OOrzR-alg2i0hw/view?usp=sharing',
      'allevents_id' => '1795510',
      'platform' => 'MS Teams <br/> Skribbl.io',
      'participants' => 'Individual (solo)',
      'overview' => 'This is a guessing and drawing based event related to chemical fields and instruments which are used in the laboratory as well as in industry. This game will test your knowledge with lots of fun.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In this round ,a group of people will play in 1 room of the skribbl.io site. Candidates are informed to visit the site and get some experience. From these ,those who will qualify will be entered into the next round.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Winners of the 1st round will play the 2nd round on the same platform with higher difficulty level questions.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In the 3rd round the difficulty level of questions will increase and the ones who are able to solve the scribble will be the winners.
            </li>',
      'rules' => "● There will be a short interactive session about the event before 10 min of every round. All the information and doubts will be clear in this interactive session. <br/>● In case of cheating, any type of misbehavior, the student will be disqualified. from competition & will not be able to receive any certificate.",
      'criteria' => "● Winners will be decided on the basis of platform rank list. <br/>● Organizers will have the authority to change the rules under certain conditions. <br/>● Further instructions will be given on the day of the event.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 3
    ]);
    DB::table('mainevents')->insert([
      'name' => 'City Mania',
      'price' => 40,
      'img' => '17Nj0ulSbRCfNYh6ASRLWSEnfPNyKcJpD',
      'big_img' => '1Hg_uApYcy_pUc9q2rQ2LjOILj-Jp0QHh',
      'rulebook' => 'https://drive.google.com/file/d/10sVfxSZgf3GR38m47QCtUU6n4c-uGyay/view?usp=sharing',
      'allevents_id' => '1795517',
      'platform' => 'Google Meet, Sketchup, AutoCAD',
      'participants' => 'Individual (solo)',
      'overview' => 'The participants have to design a town with all the important aspects such as zoning, aesthetic view, and road networks. The participants are free to implement other ideas as per their imagination and skills.
          <br />
          <b>Problem Statement:</b> <br />
          ● All the participants will be provided with the particular software decided by the management and participants have to design a basic 3D model of the city as per the criteria which will be given at the event. The participants have to use their way of designing the city as per their ideas and creativity. After that, some selected students have to present or describe their town model, if asked.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Preparation of 3D model of town using Sketchup, AutoCAD. (need to share the video of the same through google form) <br/>● Further instructions will be given on the day of the event
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Brief presentation of their model <br/>● Further instructions will be given on the day of the event.
            </li>
            <li className="event-text__structure--list-item">
              <i>Note:</i> <br /> ● The rest of the detailed information regarding software installations and town criteria will be provided to participants before an event, by online meeting.
            </li>',
      'rules' => "● All the participants have to use only selected software. Softwares will be given to the participants one week before the event. <br/>● Import/export of any kind of 3D model will not be considered. <br/>● The participants have to share their screens on MS Teams. We will send you the joining link on the event day. <br/>● If anyone is spotted cheating on an event, they will be disqualified. <br/>● Readymade trees and car models can be imported if participants want to, but only under supervision. <br/>● The model should fulfill the criteria",
      'criteria' => "● The participant who made a perfect city model which fulfilled all the basic criteria and requirements such as zoning, housing accommodation, roads, public buildings, recreational areas, open space, garden – greeneries. Every criterion will be counted as points and the highest point gainer town will be considered as a winner.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate",
      'event_id' => 4
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Scavenger Hunt',
      'price' => 40,
      'img' => '1z0wEVBg_bzCsYcbETlLkvMBKZaH1qqyu',
      'big_img' => '1Dfy8LO0c9_3Caa02-4pcDa9i1_Cd3AQz',
      'rulebook' => 'https://drive.google.com/file/d/1kZim_Ot4t_Fks__m3YYNh8EvZtI7aNDa/view?usp=sharing',
      'allevents_id' => '1795518',
      'platform' => 'Google Forms <br/>MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'A scavenger hunt is a game in which the organizers prepare a list defining a specific item, which participants seek to gather or complete all items on the list.
          <br />
          <b>Problem Statement:</b> <br />
          ● Scavenger Hunt based on Civil Engineering using the clues such as general knowledge (quiz), jumbled letters, puzzles, pictures and sketches along with collecting materials from home.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: Trivia round<br /> ● Participants will be asked questions about interesting but least known facts on many topics related to Civil Engineering. We will divide all the participants into small groups and top scorers from the groups will be selected for the next round. So in this round, participants have to answer in the chat box and we’ll judge them with quick response and accuracy criteria.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Virtual activities round<br /> ● In this round, participants have to perform some activities related to civil engineering (tasks will be assigned on the day of an event).
            </li>
            <li className="event-text__structure--list-item">
              <i>Round 3: Final round</i> <br /> ● In this final round, we will conduct a mind game related to the scavenger hunt based on Civil Engineering
            </li>',
      'rules' => "● The organizer will not be responsible for the network issues of the participants <br/>● In case of any conflict, the decision taken by the event manager or the organizer will be considered as final. <br/>● No cheating is allowed. If we find any such case, they will directly be disqualified.",
      'criteria' => "● Quick replies <br/>● Presence of mind <br/>● Accuracy of answers",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate",
      'event_id' => 4
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Paper Presentation',
      'price' => 40,
      'img' => '1SD4CLwKmEehbPYjhc7bVTHJm1nVffRCX',
      'big_img' => '1I6E3UkqEzXTmUQ2NRcRXBLmFRIpqfKWf',
      'rulebook' => 'https://drive.google.com/file/d/1RVxlnPqXmcgFfKsL-dmkCWuxCBKgfs8G/view?usp=sharing',
      'allevents_id' => '1795519',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo) or Team of 2',
      'overview' => 'This is the event of presenting your thoughts related to Civil Engineering.
          <br />
          <b>Problem Statement:</b> <br />
          ● In this event, every participating team has to present their thoughts related to Civil Engineering based on the theme and given topic. <br />● In this event, every participant team has to present their thoughts related to any Civil Engineering. Topic will be based on the theme.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: Abstract on any topic related to Civil Engineering<br /> ● Download abstract format from given in below link: <br/> <a href="https://docs.google.com/document/d/1neow3WcHyZo6E7ltIZBUkt7bb1-QfJOBGGh4ZuUb4W0/edit?usp=drivesdk">Download Abstact Format</a> <br/>● You have to fill in all the necessary information mentioned in the abstract format. <br/>● The abstract can contain a maximum of three pictures in reliance on the subject. <br/>● The content must be written in Times New Roman font of size 12 with 1.5” Spacing. <br/>● Submit the abstract at this given mail <u>(changehadiyavairag112@gmail.com)</u> address four days after the event. <br/>● If your abstract is selected then you are eligible for round 2. <br/>● Winners of round 1 will be declared on the day of the event.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Presentation round (On any topic related to Civil Engineering)<br /> ● Presentations should be made in MS Powerpoint. We will not provide any format, you have to make your presentation as you like but it should be professional. <br/>● The presentation should have 12 pages maximum. <br/>● Make a presentation on any technical topic related to the Civil Engineering field. <br/>● The time specifications are ‘8 + 2 + 2 = 12 min’. <br/>● Presentation time is limited to a maximum of 12 minutes. There will be a Warning bell at the end of 8 minutes, indicating the remainder of 2 minutes to conclude your presentation. The next 2 minutes are reserved for questions from the judges or the present audience. <br/>● No extra time after 10 minutes will be given to any participant and he/she is expected to stop as soon as their time is completed.
            </li>',
      'rules' => "● The organizer will not be responsible for the network issues of the participants <br/>● In case of any conflict, the decision taken by the event manager or the organizer will be considered as final. <br/>● No cheating is allowed. If we find any such case, they will directly be disqualified.",
      'criteria' => "● Based on the knowledge related to Civil Engineering. <br/>● Accuracy <br/>● Presentation and communication skills",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 4
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Cat-A-Pult',
      'price' => 40,
      'img' => '18-3_ewbbr5HiDU1IvPSpbeK21Tk3E9Td',
      'big_img' => '1K9QqrmsdJ8LYH_OHAQF1ciBtyiNV1lre',
      'rulebook' => 'https://drive.google.com/file/d/1NetIBAhnz6yvNLjedAosZ3LSWJrD5wRU/view?usp=sharing',
      'allevents_id' => '1795523',
      'platform' => 'MS Teams <br/> AutoCAD, Solidworks, Fusion 360 Mobile application for stimulation: Onshape.',
      'participants' => 'Individual (solo)',
      'overview' => 'This is an event to build a rapid mechanism by your basic knowledge for the problem which is given at the moment.
          <br />
          <b>Problem Statement:</b> <br />
          ● The statement will be given at the start of an event. The problem will be based on mechanical mechanisms which you have to design in simulation softwares in due time.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              ● The whole event will be conducted in three rounds. The points from the previous round will be carried forward.
            </li>
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● The first round will include a basic level of mechanism.It includes the basics of hydraulic & pneumatics by constructing mechanisms. (Topic for the mechanism will be given on the day of an event)
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● The second round will be of intermediate level. It includes the advanced mechanism without hydraulic & pneumatic. (Topic for the mechanism will be given on the day of an event)
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● In this round a more difficult mechanism will be given and you have to simulate. (Topic for the mechanism will be given on the day of an event) <br />● Further instructions will be given on the day of the event.
            </li>',
      'rules' => "● There will be a short interactive session about the Event before 10 min of every Round. All the Information and Doubts will be clear in this interactive session. <br/>● Organizers will have the authority to change the rules under certain conditions. <br />● In case of cheating, any type of misbehavior, the student will be disqualified. from competition & will not be able to receive any certificate. <br/>● In any case of dispute, the decision of the management team will be considered final.",
      'criteria' => "● The winners will be judged based on mechanism, creativity, accuracy, and time",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 5
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Chain Reaction',
      'price' => 40,
      'img' => '1Ncc63J0Xhb7Xd8rsoofRFWRlDnAaU9zV',
      'big_img' => '1EeinD9UAhS1N08j8a6FRfH4EovRo7k3_',
      'rulebook' => 'https://drive.google.com/file/d/1QHRcBfcLM3Rg7jqtgj46SwVqOfxK-d5I/view?usp=sharing',
      'allevents_id' => '1795522',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'In this event, participants have to arrange the parts for their desired setup. At the time of the event they have to assemble it in a given time frame and at the end of this chain reaction process, the whole system(mechanism) must hoist a flag.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In the first round the participant/team will have to arrange the set in the given time in front of the judging panel on MS Teams, to finally set a chain of reactions that leads to a flag being hoisted at the end of it. <br/>● The theme will be already given to the participants before an event, so that they can gather all the necessary materials. Detailed description will be given on the day of an event.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● The shortlisted participant/team will have to perform the chain reaction with an improvement of their 1st setup to execute the chain reaction according to new(improvised) problem statement streaming to the management team of the event on MS Team
            </li>',
      'rules' => "● In this event, participants have to arrange all the required components for the setup. <br/>● In case of a failure of operation the participant/team would be allotted one final chance to rearrange their setup. <br/>● Only three touches will be allowed while performing the event. After using three touches only one extra chance will be given to the team to re-establish it. <br/>● In case of any dispute, management’s decision will be final.",
      'criteria' => "● Creativity <br/>● Number of interference <br/>● Execution <br/>● Designing",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 5
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Robotic CAD',
      'price' => 90,
      'img' => '1EvmWMM75kLKqc2UXFV0kuJ8wxKeqJDDS',
      'big_img' => '1T-0J7ucSf0kJ-jAqZug-Bkn5alzNMCZo',
      'rulebook' => 'https://drive.google.com/file/d/1KtC0X0-4W1oeaOzuOBXvauMeTNldorXz/view?usp=sharing',
      'allevents_id' => '1795525',
      'platform' => 'MS Teams <br/>MATLAB, Solidworks, AutoCAD, Fusion 360, ANSYS, etc',
      'participants' => 'A team of 2-3.',
      'overview' => 'Robotic designing is the art to design a robotic mechanism with the help of engineering knowledge. This event is a competitive format of robotic designing which will twist your creativity to the next level.
          <br />
          <b>Problem Statement:</b> <br />
          ● In every round, a mechanism with sufficient data will be given to the students. After which the student has to design the given mechanism in such a way that the output which is required should be fulfilled by the mechanism.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● A simple mechanism will be given to the students, which they have to create using simulation softwares. (Mechanisms will be given on the day of an event)
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● This round will be declared on the day of the event.
            </li>',
      'rules' => "● Design can be made in any designing software or on a plane drawing sheet. <br/>● Design should be submitted in .step, .img or .pdf file format. <br/>● During the evaluation, if we find that the submitted design is copied from the internet then the respective team will be disqualified. <br/>● Design should be submitted within the given period on the day of the event.",
      'criteria' => "● The mechanism will be judged based on their creativity, dimensional accuracy, and input and output motions.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 5
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Aero Haulage',
      'price' => 90,
      'img' => '1njPW2Tk0dEa9pMsNVjdgLX0vkOYOpqhC',
      'big_img' => '1B_TvjTZIg-cGAYSoyekk-8tgkhjsdETd',
      'rulebook' => 'https://drive.google.com/file/d/1qy3Wjbht5LbsHt2nc8-7azB-hi38glId/view?usp=sharing',
      'allevents_id' => '1795528',
      'platform' => 'Round 1: MS Teams, Google Forms. <br/>Round 2: MS Teams.',
      'participants' => 'Team of 2-3',
      'overview' => 'The objective of this competition is to design a UAV integrated with a cooling system that can be used to deliver covid vaccines to the remote areas of our country.
          <br />
          <b>Problem Statement:</b> <br />
          ● The hilly terrains of India prove to be a great obstacle in the transportation and delivery of various goods and services to various parts of the region, making them increasingly inaccessible or reachable only on foot. The ongoing pandemic has again brought the government face to face with this issue of the delivery of vaccines and other medical facilities to these remote and hard-to-navigate areas. You are required to design a UAV that can be used to deliver vaccines to the remote hilly areas of the country. Such a device would save both manpower and a large amount of time whilst simultaneously lowering the resources used to maintain the low temperature that the vaccine requires for storage during cumbersome transportation. Note that in your design the cooling system/unit need not be attached to the UAV and may be a separate component that the UAV can effectively transport.
          <br />
          <b>Requirements/Specifications:</b> <br />
          ● The UAV should be able to lift the cooling system, carrying 100 bottles of vaccines in it. The minimum time of flight required is 1 hour. The cooling system should be able to maintain a minimum temperature of 2-8 degrees Celsius. The cooling system should be able to fit 100 bottles of vaccines in it, each weighing 25 grams and having a diameter of 25.4 mm, and a height of 53.5 mm.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Participants have to submit a report(.docx file), containing the rough sketch of their ideas along with some photos of it while it is being designed and have to submit it via Google Forms. The number of photos should be at least 3.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In round 1 selected participants have to present their idea in front of a panel of judges over video conferencing, who will evaluate their model based on feasibility, innovation, and cost-effectiveness of the same.
            </li>',
      'rules' => "● Any undergraduate or master's student of any discipline is eligible to participate in this event. Participants of a team can be from different institutions. <br/>● A participant can not be a part of more than one team. <br/>● The idea presented by the teams should be original. <br/>● The teams are free to use any software to design the model. <br/>● In case of any disputes/discrepancies, the organizers' decision will be final and binding. <br/>● The organizers reserve the right to change any or all of the above rules as they deem fit. Changes in rules, if any will be highlighted on the website and notified to the registered teams. <br/>● The decision of the Judges or Organizers shall be treated as final and binding. <br/>● Participants are expected to build the design from scratch. All teams found with similar designs will be disqualified. Plagiarism will not be tolerated.",
      'criteria' => "● In the first round, participants will be analyzed based on their submitted reports containing rough scratches and ideas about the project and selected for the final/next round. <br/>● And in the final round participants need to perform their views in drawing on a piece of paper or in software in which participants are adjustable and evaluated on the basis of feasibility, innovation, and cost-effectiveness of the same.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 5
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Hammer Brain',
      'price' => 30,
      'img' => '1Gf_gQa4DjslB7DTKnrn4SxESD9utut40',
      'big_img' => '1pCbX5agWx7wqLmF91C7Mvpt1ynvnJ3q-',
      'rulebook' => 'https://drive.google.com/file/d/1hdKZZPV2xPKexdb-w-Gsw0ALOv4hbj-Q/view?usp=sharing',
      'allevents_id' => '1795529',
      'platform' => 'MS Teams <br/>Google Forms',
      'participants' => 'Individual (solo)',
      'overview' => 'May all of you know about spanners. If we are required to fix or unfix the nut bolt then we must choose the correct spanner the same size as the nut/bolt. Like that in this game, you must choose the right answers from multiple choices. In short you can consider this event as a Mechanical Quiz!
          <br />
          <b>Problem Statement:</b> <br />
          ● This is basically a technical quiz on mechanical knowledge. In this quiz, you will face MCQs, and some numerical related to mechanical subjects. The topic covers various subjects like BME, EG, Thermodynamics, Theory of Machines, Machine Design, Strength of Material, Ic engine & Heat transfer',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● There will be MCQs type\'s questions. For One question, you have around 30 seconds to give an answer. Each question has 1 mark.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● There will be MCQs type questions. Each question will consist of 1 mark. <br/>● There will be a numerical type question, the answer box is provided to the participant, in this box the participant must write the answer. This question will be of 3 marks. <br/>● Answers will be considered true only if it will be in decimal format for numerical-type questions
            </li>',
      'rules' => "● Participants can join the quiz only once in the first round using the MS team. <br/>● This is a time-based quiz. <br/>● Participants must attend the quiz within a time limit. <br/>● Participants must choose all the right answers from given multiple choices in MCQs otherwise it will not be considered true. <br/>● Participants should also keep pen & paper with them for the numerical portion if required. <br/>● Participants may take support of books or the internet if required. <br/>● Participants must follow all the rules and regulations with full discipline. <br/>● No extra time will be provided to any participant under any circumstances. <br/>● If any of the students will have the same points then the evaluation will be done considering the time taken to complete the task. <br/>● Organizers will have the authority to change the rules under certain conditions.",
      'criteria' => "● Accuracy and Time factor will be majorly taken into consideration for the evaluation process.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 5
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Robo-Sapiens',
      'price' => 120,
      'img' => '1A3BSnMgvgfw-x-FqWW2um1ZuQC8SrHQc',
      'big_img' => '1AADbw5FnJfFArG_cy8JZjjUYlHGhZpKm',
      'rulebook' => '',
      'allevents_id' => '1799675',
      'platform' => 'MS Teams <br/> Google Forms',
      'participants' => 'Team of 2-3',
      'overview' => 'You have to create a line follower robot, which can detect and follow any track without using a line follower and encoder. The task of the robot will sense the path using sensors and cover the track in the least possible time.
          <br />
          <b>Problem Statement:</b> <br />
          ● The Line follower robot is an autonomous bot that can detect and follow any track without using a line follower and encoder. Generally, the path is a predefined visible black line on a white surface with high contrasting color (the path will be provided by events managers before the event starts via mail or message.) The task of this robot is to sense the path using sensors and to cover the track in the least possible time.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              ● Before the round starts we will have the introductory meeting, where we will explain the proper flow of the event. (meeting date will be provided via mail or text message.)
            </li>
            <li className="event-text__structure--list-item">
              Round 1: (CAD submission)<br /> ● In this round, you have to make a simulation of the robot with the required specifications written below. <br/>● The file should be .stl or .step. and the link will be provided to submit the simulation file. <br/>● Further instructions will be provided in the meeting.
            </li>
            <li className="event-text__structure--list-item">
              Round 2:  (Video submission)<br /> ● You have to create a real robot on given specifications. <br/>● After making the robot you have to make a 240 seconds video file of the working robot.
            </li>',
      'rules' => "● Winners will be decided based upon the scores with the minimum number of penalties made. <br/>● In case of any tie-ups, Winners will be decided based on the minimum number of errors Le.; <br/>● The bot with minimum errors is the winner and if there are any ties further, the type of bot is considered which is more efficient. <br/>● Workshop bots are allowed but given less priority
            <br />
            <br />
          <b>Requirements/Specifications:</b> <br />
          ● The Robot must be strictly autonomous <br/>● The width of the line will be less than 5cm. <br/>● Dimensions of the Rabat should not exceed 30cm*30cm*30cm.(l*b*h) Weight should not exceed 7kgs. (Proper Measurement should be shown in the video.) <br/>● File size:-not exceed 240 seconds. (video) <br/>● In case of a tie, the design of the Robot may be considered. <br/>● If none of the Robots finishes the course, then the one which covered the longest distance in less time will be considered the winner. <br/>● A power supply should be of a maximum of 24V.",
      'criteria' => "● No encoder and line follower sensor is allowed use in the robot. <br/>● The Robot has to follow the line and complete the track in the least possible time. <br/>● A maximum of 3 touches will be allowed for each round. (Each touch makes a 5-sec penalty.) <br/>● Team members can be from different colleges. <br/>● The rough sketch of the track will be uploaded to the site before the day of the event. <br/>● The final decision lies in the hands of refry. <br/>● Robots completing the track utilizing the least time will win. <br/>● The track has to be prepared by the Team due to this Pandemic situation.",
      'rewards' => "● The top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 6
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Spell Bee',
      'price' => 30,
      'img' => '1CBdmAL9OSYmdfARKxlKQ8mz9KR0qk5hi',
      'big_img' => '178mGWK9Fvo-KD_Me5PokEGBBfwkNXf4I',
      'rulebook' => 'https://drive.google.com/file/d/15eO0khDMlwkZSA6GQIiE6XEiVJfKw5W9/view?usp=sharing',
      'allevents_id' => '1799745',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'The expertise of spelling, pronunciation and your hearing will be under test.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In each slot depending on the total number of participants, a few words will be dictated and participants are supposed to write the spelling. The participant with the highest score will be promoted to the next round.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Participants have to Correct the incorrect spellings for the given words. We will provide a few words to all. Those who can correct the maximum words with the given time limit, will go to round 3.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● Participants have to pronounce a few words which we give individually.Further instructions for this round will be given on the day of an event.
            </li>',
      'rules' => "● Keep your Camera ON. <br/>● Any eye movements noticed will be disqualified <br/>● Time limit: 30 sec for round 1 for each word. <br/>● Negative marking in round 2 and priority to fastest finger first. Time limit 45 sec for each word. <br/>● Pronunciation of the given word must be clearly audible. Each finalists will get a different word.",
      'criteria' => "● Maximum correct answers in the least time will be declared as winners. Thestopwatch will be used to check the winner.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 7
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Mock Parliament',
      'price' => 30,
      'img' => '1IZaOytgnMjJ3vQdeBRyudsZMS54yI7GD',
      'big_img' => '1o6ai1gcD1kvQ2ukF-sBcK3He6IKoBlOG',
      'rulebook' => 'https://drive.google.com/file/d/1AdWd9CoXsecugvahV0hqdGtp2rFkkI3y/view?usp=sharing',
      'allevents_id' => '1799707',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'There will be three Rounds, in each round participants will get an equal chance of expressing their views, either in favor or in opposition for the particular topic.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In this round we are going to divide participants into groups, consisting of 15 participants and a debate will be conducted between them. (Topic will be given on spot)
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In this round participants will be filtered out from each group equally based on the judging criteria and again an inter group debate will be conducted. (Topic will be given on spot)
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● This will be the final round in which participants will be again divided into groups and a debate will be conducted between them. Based on the judging criteria, winners will be announced. (Topic will be given on spot)
            </li>',
      'rules' => "● The connection of the device must be stable. <br/>● Cameras must be on during an event. <br/>● Make sure there is no external disturbance from your side. <br/>● Stay active during the entire event. <br/>● Join actively at the given time. <br/>● In case of any conflicts, the decision taken by the management team will be considered as final. <br/>● In case of any misbehavior and misconduct, that participant will directly be disqualified.",
      'criteria' => "● Participants are going to be judged on the basis of their communication skill, knowledge related to the assigned topic, their overall behavior during the debate will be conducted and based on their points which are relevant to the topic.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 7
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Stock Street',
      'price' => 30,
      'img' => '16QOAG4kL1UaUihtVEpdmTViwAjizk3VS',
      'big_img' => '1zW-i-Y65_WfpTV4PhiF2mEe6pT3T2xQa',
      'rulebook' => 'https://drive.google.com/file/d/1BzC0fKkya1u5AbqE7eJMNrBxoGlMNlfO/view?usp=sharing',
      'allevents_id' => '1799775',
      'platform' => 'MS TEAMS <br> Google Forms',
      'participants' => 'Individual (solo)',
      'overview' => 'The stock market is a game of the alert mind, time, and risk-taking ability. For being a good stockbroker, one must have a strong eye for current affairs. This game will make you realize how small things matter in a stock market.
          <br />
          <b>Problem Statement:</b> <br />
          ● This event aims at testing participants’ knowledge as well as their intellectual caliber to comprehend the stock market. Moreover, it entices participants to make delicate decisions cautiously, thereby uplifting their decision-making skills. The main motto of this game is to expose and make people aware of the stock market, how it works, and how current affairs affect the market. The Participant gets real-time experience about the stock market.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: Real - Time Trading<br /> ● In this round the participants have to download an app, a link will be provided by the event volunteer through mail or message. <br/>● That app will provide you virtual money. Using that, the participants had to trade stocks and try to make their portfolios good. <br/>● All the participants will be added to the private room created by the management team within the app, so that you can get the real time experience of trading and feel the competition. <br/>● The participants with the best portfolio will qualify for the next round. <br/>● Detailed information for this round will be given before the event starts
            </li>
            <li className="event-text__structure--list-item">
              Round 2: (Video submission)<br /> ● This round will be like a Quiz. The questions will be given to them via google forms with a certain time limit. <br/>● The questions will be regarding some companies and their stock market analysis. Small hints will also be provided for some questions. <br/>● Participants with the most correct answer in given time limit will be the winner of this event
            </li>',
      'rules' => "● The participants must present at the time of the event. <br/>● The app link for Round 1 will be provided to the participants either on the day of the event or 2-3 days before the meeting so that there will be fairness in the game. <br/>● In that meeting, the volunteers will give the participants the idea of how they’re going to play the 1st round using the app. <br/>● For the 2nd round, if participants are unable to submit the answers in a given time they will be considered disqualified.",
      'criteria' => "● For Round 1, participants with greater portfolios will be qualified for Round 2. <br/>● For Round 2, Max. the number of correct answers with the lowest time interval to submit the form will be considered for winning. <br/>● Like the participants have to give correct answers quickly and correctly within the time limit.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 7
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Turncoat',
      'price' => 30,
      'img' => '15TjdTnwUA3V7DKvkuH-tCnHlaAfthmbk',
      'big_img' => '18g9vslRqbW8noVrm-vnploB3hji_cnmn',
      'rulebook' => 'https://drive.google.com/file/d/1UcRe31QUfeHbPYH9usbK29OFlSXFtymT/view?usp=sharing',
      'allevents_id' => '1799693',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'A turncoat is an event that provides a stage to the participants, where they could show up their speaking skills. This also helps the participants to groom up their confidence level. In this style of debating, the same speaker shifts allegiance between "For" and "Against" the motion. It is a solo contest, unlike other debating forms',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In this round, the participant will be given a choice that he/she wants to talk for the given topic or against the given topic. (Topic will be given on the spot)
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In this round, the participant will have to talk about the given topic and against the given topic equally. No switch command will be given to the participant in this round. It\'s up to him/her. (Topic will be given on the spot)
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● In this round, the participant will have to shift allegiance between \'For\' and \'Against\' whenever a switch command is given to them. (Topic will be given on the spot)
            </li>
            <li className="event-text__structure--list-item">
              Note: <br /> ● Timing structures will be given on the day of an event.
            </li>',
      'rules' => "● Only the English language is allowed. <br/>● The camera must be switched on while a participant is speaking. Mics must be unmuted only when an individual is asked to do so. <br/>● The participant can't read from the internet or something; if the participant is caught for doing that, he/she will be disqualified on the spot. <br/>● The participants are supposed to ensure good internet connectivity. No relaxation shall be given for the poor internet connection.",
      'criteria' => "● Relevance of content <br/>● Vocabulary and Language <br/>● Presentation skills <br/>● Ability to articulate arguments from both sides and conclude",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 7
    ]);
    DB::table('mainevents')->insert([
      'name' => 'GD-PI',
      'price' => 30,
      'img' => '1DYQqP-DcHznOZOQc0W9VQ5NlVXAgkg_J',
      'big_img' => '1ycxgmm4wCNuSh-CxRgV4zKcoqiKZbUfk',
      'rulebook' => 'https://drive.google.com/file/d/1sCYA-o2arZ-r-blKiUslExh5QGSd5lFf/view?usp=sharing',
      'allevents_id' => '1799730',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'Mock GD/PI will help the participant to know his/her position in a highly competitive environment. The whole event will provide an opportunity to the participants to feel and go through the whole placement process. The whole event is divided into two parts i.e. Group Discussion (GD) and Personal Interview (PI).',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: Group Discussion<br /> ● Groups of 7 people will be made, Participants have to discuss the given topic. <br/>● Basic agendas and rules will be followed during this round as per normal norms.(Topic will be given on spot)
            </li>
            <li className="event-text__structure--list-item">
              Round 2: Personal Interview<br /> ● Participants that are selected for this round, will be called upon for the Personal Interview. <br/>● Basic agendas, rules and regulations will be followed during this round as per normal norms.
            </li>',
      'rules' => "● All the participants should be well dressed (Formal wear), if possible. And will have to provide a CV. (Link of google form to submit the CV will be given through mail or message) <br/>● Make sure you have a stable connection. <br/>● If any participant doesn’t show up or leave the meeting for more than 3 minutes will be disqualified.",
      'criteria' => "● Candidate appears for the GD/PI, he/she must keep in mind that he/she is being judged not only on what is being spoken or written by him/her but on several other parameters like their body language, pitch, expressions, mannerism, etc.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate",
      'event_id' => 7
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Unfold',
      'price' => 30,
      'img' => '1PB2rGH62iLqBig2gn6FBMB4Ovpr6ln2j',
      'big_img' => '1cyMmybwjGK15OVkQfp-BaTU2JU2is4X8',
      'rulebook' => 'https://drive.google.com/file/d/1oEGdtEllet8sZm6mTWAZAvdNUYW1j38u/view?usp=sharing',
      'allevents_id' => '1799761',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'The event “unfold” is all about being aware of current affairs. Whereas, one must have to read the newspaper. Furthermore, this game is all about having fun and sharpening one’s mind which also improves vocabulary, writing skills, and many more which helps oneself be confident keeping their view.
            <br />
          <b>Problem Statement:</b> <br />
          ● This game consists of 3 rounds in which the participants will have to go through some tasks where they have to answer the questions on current affairs and the participants who have answered correctly will be qualified. Also the participants will go through an experience of Journalism.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: (Current Affairs Quiz)<br /> ● Twist: the participants will have to go through the fastest finger first. Where they also have to manage timings and also answer the given question, which will be kind of a difficult task for the participants. After each question participants have 15 secs to answer the question. <br/>● Judging Criteria: Point structure will be given on the day of the event.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> Section A: <br/>● The participants will be given an annotated report which in terms of journalism means “badly written”. It may contain wrong grammar, commas, incorrect spellings, and many other mistakes. The participants will have to edit the report and type it correctly within prescribed time limits. Also, the participants need to give the report an appropriate title. <br/>Section B: <br/>● The participants will have to write a report on any one of the events of the fest they have participated in, to the auditorium events or any two events they prefer, and submit it in the mail/assignment section (Zoom) with name and college written clearly. <br/>● Both the sections have a word limit of 100. <br/>● Normal Newspaper Report format can be used. <br/>● After completion of time extra will be given to submit the report. <br/>● The report should be written on A4-sized paper and be sent in pdf form or it can be written in word. And submit it in the mail/assignment section(Zoom). <br/>● <i>Judging Criteria:</i>Writing skills, Vocabulary, Detailing, Event Coverage.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: Final Round<br /> Section A: <br/>● Submit some unique questions that you would like to ask the participants of the fest.<br/>Section B: <br/>● Work your journalist charm. Record reactions/responses of your friends about the question you asked them and submit the 2-minute video! And submit it in the mail/assignment section (MS Teams). <br/>● Judging Criteria: Audience Reaction, Utilization of Time <br/>● Further details of this round will be given on the day of an event.
            </li>',
      'rules' => "● Participants have to be present at the time of the event <br/>● The video must be kept ON by the participants during the ongoing event <br/>● Participants must answer the question in a limited time <br/>● If participants are found doing discussion or cheating they will be disqualified.",
      'criteria' => "● Answering the question correctly and in a limited time will make a way closer to winning and will gain points. <br/>● Also things like writing skills, vocabulary, detailing, Event Coverage, capturing audience reaction, report writing, etc will be taken into consideration for the evaluation process.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 7
    ]);
    DB::table('mainevents')->insert([
      'name' => 'General Quiz',
      'price' => 30,
      'img' => '1EMyQxt0bsvdql9zHof65RofqKYsPqiae',
      'big_img' => '1nNKmvs-DV1W2AgqC1NaGNCki0u4m6jqo',
      'rulebook' => 'https://drive.google.com/file/d/187yWr4w0LIOC0yJo58rP1VpmH143dbWk/view?usp=sharing',
      'allevents_id' => '1799739',
      'platform' => 'Zoom <br>Google Forms/Aha Slides',
      'participants' => 'Individual (solo)',
      'overview' => 'General Quiz’ as the name speaks out itself that this event will be carried out in the form of a Quiz. The questions will be based on topics like: Current affairs, Sports, Music, Arts, History, Movies, Business, Science and Technology, Popular Culture, etc.
            <br />
          <b>Problem Statement:</b> <br />
          ● This event will consist of 3 rounds. Round 1, Round 2, and Round 3. All the rounds will be conducted on MS Teams and Google Forms. The timing of each round will be informed on the day of an event.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: (Preliminary Round)<br /> ● Round 1 will be conducted on Zoom and answers will be accepted through Google forms. <br/>● The Zoom link will be first given. <br/>● There will be a few questions. No negative markings, 1 mark for each correct answer. <br/>● Τhe number of participants who will qualify for the next round will be based on the number of teams/registrations in Round 1.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: (Secondary Round)<br /> ● Round 2 will also be conducted on Zoom and answers will be accepted through Google forms. <br/>● There will be No negative markings, 1 mark for each correct answer. <br/>● The difficulty level of the questions will be a little bit high.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: (Final Round)<br /> ● Round 3 will also be conducted on Zoom. <br/>● The questions will be asked individually and in a Bounce-Pounce fashion. (The system of Bounce-Pounce will be explained at the time of Final Round).
            </li>',
      'rules' => "● This event will be conducted on online platforms, so the participant(s) must have a good and stable internet connection. <br/>● The participant must have an account and access to these online platforms (Zoom and Google forms). <br/>● The Google form(answers) must be submitted before the given deadline. <br/>● No late submissions will be accepted afterward. <br/>● In case of any dispute, the decision of the Event Coordinator will be considered final. <br/>● Support of any online sources/Google search will lead to immediate disqualification; one must answer based on his/her knowledge. <br/>● All participants need to keep their video on for all the rounds. <br/>● Violation of any rule will lead to your disqualification.",
      'criteria' => "● After Round 1, the number of teams qualifying to Round 2 will be based on the scores and the number of registrations in Round 1. <br/>● After Round 2, Top teams with the highest points will be qualifying for Round 3. <br/>● After Round 3, Top 3 teams with the highest points will be declared winning positions accordingly.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 7
    ]);
    // =================================
    // lgt event needs to be added
    // =================================
    DB::table('mainevents')->insert([
      'name' => 'Lakshya\'s Got Talent (Solo)',
      'price' => 30,
      'img' => '1ET2iwKDxQlxDuSNzM1lzUqGQz7bhvkbT',
      'big_img' => '1IC4Z4QhXXDQcoOCqekg0H0sdhg68sN2H',
      'rulebook' => 'https://drive.google.com/file/d/1s4_chB72hL6IYrka92svSXJMvh7lBLi3/view?usp=sharing',
      'allevents_id' => '1799977',
      'platform' => '',
      'participants' => 'Individual (solo)',
      'overview' => 'Sing like a nightingale, strum like a rock star, dance to the beats and show us all that you’ve got. Be the life of the event and we will make sure that you get recognized.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● You have to submit the pre-recorded video showcasing your talent to us within due time. <br/> ● We will verify the video and let you know further details about the event via mail.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In this round, you will have to remain present in the meet at an allotted time on the event day. <br/>● We will share your video screen with the judges and you have to answer the questions regarding it during the event.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● If you are selected for this round, you will be given 2 days to upload a new fresh video showcasing your talent. <br/>● We will present your video screen to judges and the winners will be selected based on the performance and quality of the content.
            </li>',
      'rules' => "● In case of any conflict or misconduct, decisions taken by the management will be final and no excuses will be entertained. <br/>● You have to keep your camera ON during the event. <br/> ● The video should be uploaded in a folder in your drive and the link for the same should be uploaded in the Google form link sent to you via email in due time <br/>● The duration of the video should not exceed 8 minutes. <br/>● The video can be recorded on the phone, camera, or any other device.",
      'criteria' => "● Expert judges will judge the content of the video based on talent, effort, and also the quality of the content presented.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Lakshya\'s Got Talent (Team)',
      'price' => 90,
      'img' => '1ET2iwKDxQlxDuSNzM1lzUqGQz7bhvkbT',
      'big_img' => '1IC4Z4QhXXDQcoOCqekg0H0sdhg68sN2H',
      'rulebook' => 'https://drive.google.com/file/d/13Q6M5Pt7Fm6tp7g5kWY2639aTGHHOxnX/view?usp=sharing',
      'allevents_id' => '1799988',
      'platform' => '',
      'participants' => 'Team',
      'overview' => 'Sing like a nightingale, strum like a rock star, dance to the beats and show us all that you’ve got. Be the life of the event and we will make sure that you get recognized.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● You have to submit the pre-recorded video showcasing your talent to us within due time. <br/> ● We will verify the video and let you know further details about the event via mail.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In this round, you will have to remain present in the meet at an allotted time on the event day. <br/>● We will share your video screen with the judges and you have to answer the questions regarding it during the event.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● If you are selected for this round, you will be given 2 days to upload a new fresh video showcasing your talent. <br/>● We will present your video screen to judges and the winners will be selected based on the performance and quality of the content.
            </li>',
      'rules' => "● In case of any conflict or misconduct, decisions taken by the management will be final and no excuses will be entertained. <br/>● You have to keep your camera ON during the event. <br/> ● The video should be uploaded in a folder in your drive and the link for the same should be uploaded in the Google form link sent to you via email in due time <br/>● The duration of the video should not exceed 8 minutes. <br/>● The video can be recorded on the phone, camera, or any other device.",
      'criteria' => "● Expert judges will judge the content of the video based on talent, effort, and also the quality of the content presented.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Intrigued Mappers',
      'price' => 30,
      'img' => '15Bkme_ZFZc-tcpt0FawSb9a0Cksbpe30',
      'big_img' => '1ycqUwHopUORck6pOBZsrSLW1l4ck3H96',
      'rulebook' => 'https://drive.google.com/file/d/1MSq9AKbrmhCsZxnqoG7ZgFFWPbBrcNnO/view?usp=sharing',
      'allevents_id' => '1799844',
      'platform' => 'GeoGuessr (website)',
      'participants' => 'Individual (solo)',
      'overview' => 'It is a web-based geographic discovery game. The game requires players to guess their location in the world using only the clues that are visible on the map.
            <br />
          <b>Problem Statement:</b> <br />
          ● From the maps presented, things such as road signs, vegetation, businesses, climate, and landmarks have been suggested as some clues that may help the player determine their location. The player may also move about along the roads through the normal directional controls provided by Street View. Once the player is ready to guess the location, they will place a location marker on a zoomable map. After the placed marker is submitted as a guess, it reveals the true geographic location and assigns the player a score depending on how far away the player\'s guess was from the true location. Scores range between 0 for a guess at an antipode and 5000 points if the guess is within about 150 meters of the correct location. However, point totals vary between different maps. A new location is then provided to the player, and the process repeats until the player has guessed five locations for a maximum of 25,000 possible points.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Consists of 4 legs. Each leg consists of 5 unique semi-randomized destinations. Few of the top participants will be selected for the next round.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Consists of 4 legs. Each leg consists of 5 unique semi-randomized destinations. Few top participants will be selected for the next round. (Map Will be different from the previous round).
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● Consists of 4 legs. Each leg consists of 5 unique semi-randomized destinations. The top 3 participants will be announced as winners. (Map Will be different from the previous round and the difficulty level would rise a bit. ).
            </li>',
      'rules' => "● In case the participant arrives late, no consideration will be given and would have to play with the remaining time. <br/>● The number of rounds may change as per the total number of participants. <br/>● Google search is allowed.",
      'criteria' => "● The performance will be directly linked to the number of points scored in each round.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Valorant',
      'price' => 150,
      'img' => '1n6ry_whFkJqyDR6ZNtiBQiHx1xV-qP0m',
      'big_img' => '1pAiBYcY5JLMWDFkRbHYdky8JJrClPhmt',
      'rulebook' => 'https://drive.google.com/file/d/1IbD7f9KJHraygS1f4mycviFbFZIO1YLg/view?usp=sharing',
      'allevents_id' => '1799855',
      'platform' => 'Valorant',
      'participants' => 'Team of 5 players',
      'overview' => 'Blend your style and experience on a global, competitive stage. You have 13 rounds to attack and defend your side using sharp gunplay and tactical abilities.And, with one life per-round, you\'ll need to think faster than your opponent if you want to survive. Take on foes across competitive and unranked modes as well as deathmatch and spike rush (PC game) .
            <br />
          <b>Problem Statement:</b> <br />
          ● The team contain 5 players and they have to play well with team coordination to win against the opponent team',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              ● The first 2 rounds will be spike rush(Elimination & face off rounds) and the remaining rounds will be standard. <br/> ● Event structure can be changed as per the number of participating teams.
            </li>',
      'rules' => "● The match will be started once both the teams confirm they are ready after typing “READY” in the lobby chat, the confirmation is to be given by the team leader of each team. Decision of the manager will be the final decision. <br/>● If a player disconnects during the game, the game must continue and will not be remade <br/>● If you have any internet issue (ping issue) in-game then it will be completely your responsibility <br/>● If some player of the team will absent during the given time then it will be your fault and time will not change you have to play will available, players <br/>● If a full team is absent during a given time then the other team directly goes to the next round
            <br/>
            <b>Server Set-Up:</b>
            <br/>
            ● Map: Will be disclosed during the buffer time. <br/>● Mode: Standard <br/>● Options <br/>● Allow Cheats: Off <br/>● Tournament Mode: On <br/>● Overtime: Win by Two: On <br/>● Primary Servers: Mumbai
            <br/>
            <b>Violation of Rules(cheating):</b>
            <br/>
            ● It is forbidden to cheat, modify the game files, exploit bugs, and/or use any third-party application which would give an unfair advantage against other users. Using any cheat will result in disqualifications. This includes, but are not limited to: <br/> ● ESP <br/>● Radar Hacks <br/> ● Wallhacks <br/>● Speed Hacks <br/>● Aim Hacks <br/>● Hitbox Manipulation <br/>● Teleportation (any kind of teleportation which is not possible in-game) <br/>● Usage of a bug/bugs to gain an advantage versus your opponents
            <br/>
            <b>Please Note:</b>
            <br/>
            ● No technical issues on your end will be entertained other than the ones specified in the rules. <br/>● Any kind of disrespectful behavior towards the opposing team will not be appreciated. <br/>● Decisions made by the Organising Committee will be final and non-arguable
            <br/>
            <b>Maps:</b>
            <br/>
            ● Maps will be decided after the completion of team registrations.
            ",
      'criteria' => "● Each winning team goes to the next round and last round will be a final round",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'BATTLE GROUND MOBILE INDIA (Solo)',
      'price' => 30,
      'img' => '1n_z5zLtb6YB8OPqLQXOgu_FnvnyM-u5Z',
      'big_img' => '1DZ8IoN2mjM8ST7gsfwLcmwIJf8rjp50h',
      'rulebook' => 'https://drive.google.com/file/d/1RSyoa1gbBE8-gR9jhWFdTP_KqfqUwdYR/view?usp=sharing',
      'allevents_id' => '1799901',
      'platform' => 'Battle ground mobile India (BGMI)',
      'participants' => 'Solo ( one player )',
      'overview' => 'Battle ground mobile India (BGMI) is a new free game made for Indians
            <br />
          <b>Problem Statement:</b> <br />
          ● The game includes classic mode featuring up to 100 players. A player can choose to play along with two-man or four-man. Once all 100 players are ready they get aboard a plane that flies in a straight line over the map.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              ● All matches will play in BGMI is Erangle (TPP)
            </li>
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● There are different groups like Group A , Group B ... Group E etc . Each group has 20 teams. From each group, top 5 teams select other teams will be eliminated
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● From each group, the top 5 teams get a chance in Round 2 . Round 2 will be the final and last round of the tournament . In Round 2 top 3 teams get exciting prize money.
            </li>
            ',
      'rules' => "● All players and team members are informed to download the latest version of BGMI and erangle map. <br/>● If player disconnect during match , the game might be continue and will not be restart <br/>● If you have any internal issue (ping issue) In-game that it will be your responsibility. <br/>● If some player of the team is absent during the given time then it will be your fault and time will not change . You have to play with an available player <br/>● Players may participate in Events only on mobile phone handheld devices running the Android or The iOS operating systems. Players may not use peripheral devices of any kind without the approval of <br/>● Tournament Officials (including adapters, controllers, Bluetooth keyboards, and mic). Players May not use an emulator to play on a PC or other device that is not a handheld device. <br/>● Team Members must behave in a professional and Sportsmanlike manner in their interactions with other competitors, Tournament Officials, the Tournament Organizer <br/>● It is forbidden to cheat , modify the game file , exploit bug , and/or use any third party application which would give you an unfair advantage against other player/team. Using any cheat will result in disqualification. This includes but are not limited to <br/>○ Esp <br/>○ Magic bullet <br/>○ Wall hack <br/>○ Speed Hack <br/>○ Aimbot <br/>○ No recoil <br/>○ Flying vehicles <br/><i>Note: (in game)</i> <br/>● No technical issues on your end will be entertained other than the once specified in the rule <br/>● Any kind of disrespectful behaviour towards the opposing team or event organizer will not be appreciated <br/x>● Discussion made by the organising committee will be final and non arguable
            ",
      'criteria' => "● Each winning team goes to the next round and last round will be a final round",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'BATTLE GROUND MOBILE INDIA (Squad)',
      'price' => 120,
      'img' => '1n_z5zLtb6YB8OPqLQXOgu_FnvnyM-u5Z',
      'big_img' => '1DZ8IoN2mjM8ST7gsfwLcmwIJf8rjp50h',
      'rulebook' => 'https://drive.google.com/file/d/1RSyoa1gbBE8-gR9jhWFdTP_KqfqUwdYR/view?usp=sharing',
      'allevents_id' => '1799942',
      'platform' => 'Battle ground mobile India (BGMI)',
      'participants' => 'Squad ( Four player )',
      'overview' => 'Battle ground mobile India (BGMI) is a new free game made for Indians
            <br />
          <b>Problem Statement:</b> <br />
          ● The game includes classic mode featuring up to 100 players. A player can choose to play along with two-man or four-man. Once all 100 players are ready they get aboard a plane that flies in a straight line over the map.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              ● All matches will play in BGMI is Erangle (TPP)
            </li>
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● There are different groups like Group A , Group B ... Group E etc . Each group has 20 teams. From each group, top 5 teams select other teams will be eliminated
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● From each group, the top 5 teams get a chance in Round 2 . Round 2 will be the final and last round of the tournament . In Round 2 top 3 teams get exciting prize money.
            </li>
            ',
      'rules' => "● All players and team members are informed to download the latest version of BGMI and erangle map. <br/>● If player disconnect during match , the game might be continue and will not be restart <br/>● If you have any internal issue (ping issue) In-game that it will be your responsibility. <br/>● If some player of the team is absent during the given time then it will be your fault and time will not change . You have to play with an available player <br/>● Players may participate in Events only on mobile phone handheld devices running the Android or The iOS operating systems. Players may not use peripheral devices of any kind without the approval of <br/>● Tournament Officials (including adapters, controllers, Bluetooth keyboards, and mic). Players May not use an emulator to play on a PC or other device that is not a handheld device. <br/>● Team Members must behave in a professional and Sportsmanlike manner in their interactions with other competitors, Tournament Officials, the Tournament Organizer <br/>● It is forbidden to cheat , modify the game file , exploit bug , and/or use any third party application which would give you an unfair advantage against other player/team. Using any cheat will result in disqualification. This includes but are not limited to <br/>○ Esp <br/>○ Magic bullet <br/>○ Wall hack <br/>○ Speed Hack <br/>○ Aimbot <br/>○ No recoil <br/>○ Flying vehicles <br/><i>Note: (in game)</i> <br/>● No technical issues on your end will be entertained other than the once specified in the rule <br/>● Any kind of disrespectful behaviour towards the opposing team or event organizer will not be appreciated <br/x>● Discussion made by the organising committee will be final and non arguable
            ",
      'criteria' => "● Each winning team goes to the next round and last round will be a final round",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => '64 Squares',
      'price' => 30,
      'img' => '14X-2perIR3HjHmSjg_dtCjNGNkEhgNVf',
      'big_img' => '156otwSTSkm440R20M31zd0kV4DByPr2i',
      'rulebook' => 'https://drive.google.com/file/d/1REBv5HlrMOUX2w8ijavff_nebH37IH4-/view?usp=sharing',
      'allevents_id' => '1799995',
      'platform' => 'Chess.com',
      'participants' => 'Individual (solo)',
      'overview' => 'Chess is a two-player board game played on a chessboard (a square-checkerboard with 64 squares arranged in an eight-by-eight grid).
            <br />
          <b>Problem Statement:</b> <br />
          ● This is a simple chess game with a little twist, you will get a random opening position and all the other rules will be the same. This type of chess is called chess960 because there are 960 possible setups. It is also called Fischer Random Chess.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Elimination round (Face off round)
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Play-off round
            </li>
            <li className="event-text__structure--list-item">
              Note: <br /> ● Further instructions will be given on the day of the event.
            </li>
            ',
      'rules' => "● Event managers or judge’s decisions will be final. <br/>● Stock-engine or any other machine is not allowed. <br/>● Participants will have to follow all FIDE’s (The International Chess Federation) rules.
            ",
      'criteria' => "● The game will follow the rules as per FIDE and after the match, the winners will be declared by the judges",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Meme War',
      'price' => 30,
      'img' => '1SulyIuRbz2abOGAJgndB8ypsZRuYUX_C',
      'big_img' => '1EVVVzCa0bYc3cPJOIaLKQ_iAfuM9i0l5',
      'rulebook' => 'https://drive.google.com/file/d/1QbrAkCH0vhDuHuLZ3vaERmCSLvM8eVz-/view?usp=sharing',
      'allevents_id' => '1800003',
      'platform' => 'Round 1: quiz :- Google form <br/>Round 2&3: memes from templates :- Telegram <br/>Round 4: memes & Counter memes :- discord',
      'participants' => 'Individual (solo)',
      'overview' => 'This is the Ultimate War of Members to decide who will be The Meme Lord of the Lakshya.
            <br />
          <b>Description:</b> <br />
          ● This is a 4 round competition testing various abilities that a memer needs. The competition is all about creativity and humor of a participant so use every last brain cell of yours to make people laugh.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● The first round is the quiz to test your knowledge about memes. Further instructions will be given on the day of the event
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● In the Second Round You\'ll be given a limited number of Meme Templates to create memes. Let\'s see how you manage to make the best out of limited resources.
            </li>
            <li className="event-text__structure--list-item">
              Round 3: <br /> ● Let\'s change the Meme format to make it more challenging and Interesting. You\'ll be given video templates to create memes. (High Level Video Editing Skills are not Required).
            </li>
            <li className="event-text__structure--list-item">
              Round 4: <br /> ● This is the Final Round which will give us our Meme Lord. Let\'s Create Memes on the spot and Counter other participants by memes..
            </li>
            ',
      'rules' => "● Avoid using multiple accounts to participate in the competition. <br/>● Stick to the originality of memes you make to increase the chances of winning. Copied memes will be disqualified. <br/>● You can use various tools to make and edit memes. Avoid using meme generators. <br/>● You can edit your memes as many times as you want before the deadline. <br/>● This is a fun competition so mild trolling is acceptable. (There is a difference between trolling and disrespect. The disrespect of any participants or coordinators is not acceptable). <br/>● Your memes should not contain any kind racism, disrespect towards any religious group or community, pornographic content will be disqualified. <br/>● Going against the jury Members is not acceptable.
            ",
      'criteria' => "● We respect every participant’s creativity so let us show you how we Judge a meme. Judge's Formula: 55% Humor + 30% Uniqueness + 15% Editing and Dedication <br/>● Originality, sarcasm and humor will be given priority. <br/>● Make it more unique and give it some personal touch to differentiate. <br/>● Editing level of any template to make it usable for your content.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Poster Making',
      'price' => 30,
      'img' => '1NgTT9tXZNcIP139yShpCz5e5gGAl3ec6',
      'big_img' => '1Y_KdPuToMrpdzLENiNwcXAupzt6SOoJK',
      'rulebook' => 'https://drive.google.com/file/d/1Y-ALBIbpybL1qENlHvwFpkS1wd3lKSny/view?usp=sharing',
      'allevents_id' => '1800009',
      'platform' => 'MS Teams',
      'participants' => 'Individual (solo)',
      'overview' => 'This is a fun event to showcase your skills and creativity at your best..! In this event, you have to make posters according to the themes given to you on the day of an event
            <br />
          <b>Problem Statement:</b> <br />
          ● In this event, each participant has to present their art and craft on their poster on the given theme. Theme will be given on the day of an event.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● Participants have to make a poster in 2 hours on given topics.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● Participants have to make a poster within only 1 hour on the given topics. (Theme will be different from the previous round)
            </li>
            ',
      'rules' => "● Poster should not be offensive to any religion, casts, persons, etc. <br/>● Only hand made posters will be considered. Any computerized poster will not be accepted. <br/>● Make the poster in a live session. Pre-made posters will not be allowed. <br/>● Make sure that you have proper Internet quality during the whole event. <br/>● You have to turn on your camera while making the poster
            ",
      'criteria' => "● Judges will decide winners according to the following criteria. <br/>● The poster that was made, was it according to the theme or not? <br/>● Neatness and cleanliness.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
    DB::table('mainevents')->insert([
      'name' => 'Scribble',
      'price' => 30,
      'img' => '1Rmf4dxLTK_H2WDssNHOx-ZcawYbLZRUz',
      'big_img' => '1NVsu636QZjTJwNm61Q_oPNDSZmSP40Tj',
      'rulebook' => 'https://drive.google.com/file/d/1O5EMfWoc3o1nGGiuQZj_rHKiHl0OizXZ/view?usp=sharing',
      'allevents_id' => '1800021',
      'platform' => 'MS Teams <br/> Skribbl.io',
      'participants' => 'Individual (solo)',
      'overview' => 'It is a free multiplayer drawing and guessing game. One game consists of a few rounds, in which someone has to draw their chosen word and others have to guess it to gain points! The person with the most points at the end of the game will then be crowned as the winner!
            <br />
          <b>Problem Statement:</b> <br />
          ● Private rooms contain some players and they have to play individually and win against opponent participants.You will be invited to Microsoft teams or google meet before initializing the game.',
      'event_structure' => '
            <li className="event-text__structure--list-item">
              ● Total 2 rounds will be there.
            </li>
            <li className="event-text__structure--list-item">
              Round 1: <br /> ● In the first round, You are divided into small groups and the round will be held in Skribbl.io private room. <br/>● You need to gain as many points as possible, to qualify for round 2.
            </li>
            <li className="event-text__structure--list-item">
              Round 2: <br /> ● The same as round 1.
            </li>
            <li className="event-text__structure--list-item">
              Further instructions will be given on the day of the event.
            </li>
            ',
      'rules' => "● The Decision of the manager will be the final decision. <br/>● If you have any internet issues in the game then it will be completely your responsibility. <br/>● If any misbehavior will be noticed by the manager then you will be fired from the entire game.",
      'criteria' => "● The person with the maximum points goes to the next round.",
      'rewards' => "● Top three winners from the final round will get exciting prizes and winning certificates. <br/>● All participants who attended the event will get a participation certificate.",
      'event_id' => 8
    ]);
     //1 (ethical hacking)
DB::table('mainevents')->insert([

  'name' => 'Ethical Hacking & Cyber Security Workshop',
  'price' => 100,
  'img' => '',
  'big_img' => '',
  'rulebook' => '',
  'allevents_id' => '',
  'platform' => 'MS Teams',
  'participants' => 'Individual (solo)',
  'overview' => 'The workshop helps the students to know about Ethical Hacking and
  Information security thereby giving them knowledge about Reading the
  Hacker’s mind and Understanding the hacking psychology and methodology and lots
  more with proper demonstrations and practical work. The workshop would be
  conducted by faculty having InterNational Level Expertise in the field of Information
  Security and Ethical Hacking. 
  <br />',
  'event_structure' => 'Workshop Structure:
  <li className="event-text__structure--list-item">
  ● This is 2 days Workshop.
  </li> 

  
<li className="event-text__structure--list-item">
  Topics to be covered on Day 1: <br />
  ● Introduction to Security Concepts <br />
  ● Malware and Social Engineering <br />
  ● Q and A 
  </li>
<li className="event-text__structure--list-item">
  Topics to be covered on Day 2: <br />
  ● Website and web application Security <br />
  ● Wireless Network Security <br />
  ● Q and A 
  </li>
  ',
  'rules' => "<b>Requirements:</b> <br />
  The laptop is more preferable for the workshop.<br />
  Participants have to connect with good internet connectivity.",
  'criteria' => "",
  'rewards' => "● All the participants will get National-level participation certificates.",
  'event_id' => 9,
]);

//2 (cloud computing)

  DB::table('mainevents')->insert([

  'name' => 'Cloud Computing Workshop',
  'price' => 100,
  'img' => '',
  'big_img' => '',
  'rulebook' => '',
  'allevents_id' => '',
  'platform' => 'MS Teams',
  'participants' => 'Individual (solo)',
  'overview' => 'The Cloud Computing Workshop will make participants adept at
various cloud computing architectures. Live projects will help participants
keep up with all technologies, tools, and methodologies required to
understand and work on cloud computing principles used in the IT industry. 
  <br />',
  'event_structure' => 'Workshop Structure:
  <li className="event-text__structure--list-item">
  This is 2 days Workshop.
  </li> 
  <li className="event-text__structure--list-item">
  Topics to be covered:</li>
  <ul>
      <li>1. What is Cloud Computing? </li>
      <li>2. What is virtualization. </li>
      <li>3. Need for virtualization in cloud </li>
      <li>4. Hand on virtualization in VMware </li>
      <li>5. Types of Cloud Deployment </li>
      <li>6. Types of Cloud Computing Services
        <ul>
          &nbsp a. Infrastructure as a Service (IaaS)<br />
          &nbsp b. Platform as a Service (PaaS)<br />
          &nbsp c. Software as a Service (SaaS)<br />
        </ul>
      </li>
      <li>7. Why Migrate into the cloud </li>
      <li>8. How to Choose the Right Cloud Provider </li>
      <li>9. What to Look For in a Cloud Services Provider </li>
      <li>10. Different market leaders in cloud service provider </li>
      <li>11. Amazon web service </li>
      <li>12. Hands-on Amazon’s compute EC2 </li>
      <li>13. Hands-on Amazon’s Storage service S3 </li>
      <li>14. Google app engine </li>
      </ul>
    </li>
    ',
  'rules' => "<b>Requirements:</b> <br />
  The laptop is more preferable for the workshop.<br />
  Participants have to connect with good internet connectivity.",
  'criteria' => "",
  'rewards' => "● All the participants will get National-level participation certificates.",
  'event_id' => 9,
]);

//3 (iot workshop)

  DB::table('mainevents')->insert([

  'name' => 'Internet of Things (IoT) Workshop',
  'price' => 100,
  'img' => '1EE4S6jh1arAZ2dfohPQI6LidnORXkukV',
  'big_img' => '1WIDyPHRxOV3SDTEtkgtXbSIdOtY6qZL8',
  'rulebook' => '',
  'allevents_id' => '',
  'platform' => 'MS Teams',
  'participants' => 'Individual (solo)',
  'overview' => 'Internet of Things is a new revolution of the Internet. A world where the
real, digital, and the virtual are converging to create smart environments that
make energy, transport, cities, and many other areas more intelligent. A
device that becomes a smart device is called IoT.
  <br />',
  'event_structure' => 'Workshop Structure:
  <li className="event-text__structure--list-item">
  ● This is 2 days Workshop.
  </li> 

  
<li className="event-text__structure--list-item">
  Topics to be covered: <br />
      ● What is IoT? <br />
      ● Difference between Microcontroller and Microprocessor <br />
      ● Applications of IoT <br />
      ● Architecture of IoT<br />
      ● Describing IoT Board<br />
      ● Introduction to Microcontrollers: Arduino, Raspberry Pi, and Node MCU<br />
      ● Interfacing to Microcontrollers: Arduino, Raspberry Pi, and Node MCU<br />
      ● Introduction to IoT cloud<br />
      ● The operating system of IoT<br />
      ● Future of IoT<br />
  </li>
  ',
  'rules' => "<b>Requirements:</b> <br />
  The laptop is more preferable for the workshop.<br />
  Participants have to connect with good internet connectivity.",
  'criteria' => "",
  'rewards' => "● All the participants will get National-level participation certificates.",
  'event_id' => 9,
]);

  //4 (android devlopment)

  DB::table('mainevents')->insert([

  'name' => 'Android Development Workshop',
  'price' => 100,
  'img' => '1NjbCGOLjfVMOMn42Pi5AKKND7KxLy409',
  'big_img' => '1qc39idlQlJMuAs3i1UZxqKKXABu9c6qE',
  'rulebook' => '',
  'allevents_id' => '',
  'platform' => 'MS Teams',
  'participants' => 'Individual (solo)',
  'overview' => "Learn to develop applications in the latest operating system with practical
implementation and begin managing your own cool applications like a professional at
this workshop. Attendees will be provided with instructions to build and manage new
cool applications. What's more, you can even sell out this application and earn good
money. 
  <br />",
  'event_structure' => 'Workshop Structure:
  <li className="event-text__structure--list-item">
  ● This is 2 days Workshop.
  </li> 

  
<li className="event-text__structure--list-item">
  Topics to be covered on Day 1: <br />
  ● Installation of Android Studio<br />
  ● Manifest File, Logo, Name of Application<br />
  ● Layouts and Themes<br />
  ● Animations in Layout<br /> 
  </li>
<li className="event-text__structure--list-item">
  Topics to be covered on Day 2: <br />
  ● Introduction To Kotlin<br />
  ● Kotlin Programming<br />
  ● Website to Android(WebView)<br />
  ● Q/A Session<br />
  </li>
  ',
  'rules' => "<b>Requirements:</b> <br />
  The laptop is more preferable for the workshop.<br />
  Participants have to connect with good internet connectivity.",
  'criteria' => "",
  'rewards' => "● All the participants will get National-level participation certificates.",
  'event_id' => 9,
]);

  //5 (photography workshop)

  DB::table('mainevents')->insert([

  'name' => 'Photography Workshop',
  'price' => 100,
  'img' => '',
  'big_img' => '',
  'rulebook' => '',
  'allevents_id' => '',
  'platform' => 'MS Teams',
  'participants' => 'Individual (solo)',
  'overview' => 'This workshop will be conducted by the Institute for Photography Excellence.
It is a 1-day workshop. 
  <br />',
  'event_structure' => 'Workshop Structure:
  <li className="event-text__structure--list-item">
  ● This is 1 day Workshop.
  </li> 

  
<li className="event-text__structure--list-item">
  Topics to be covered on Day 1: <br />
  ● Camera Controls<br />
  ● Framing & Composition Techniques.<br />
  ● Simplicity<br />
  ● Rule of thirds<br />
  ● Landscape Composition<br />
  ● Lines<br />
  ● Shapes<br />
  ● Framing<br />
  ● Negative space<br />
  ● Angle<br />
  ● Exposure<br />
  ● Aperture<br />
  ● Shutter Speed<br />
  ● ISO<br />
  ● And many more topics to be covered<br />
  </li>

  ',
  'rules' => "<b>Requirements:</b> <br />
  The laptop is more preferable for the workshop.<br />
  Participants have to connect with good internet connectivity.",
  'criteria' => "",
  'rewards' => "● All the participants will get National-level participation certificates.",
  'event_id' => 9,
]);
    // DB::table('mainevents')->insert([
    //   'name' => 'To be added soon...',
    //   'price' => 0,
    //   'img' => '',
    //   'big_img' => '',
    //   'rulebook' => '',
    //   'allevents_id' => '',
    //   'platform' => 'To be added soon...',
    //   'participants' => 'Individual (solo)',
    //   'overview' => 'To be added soon...',
    //   'event_structure' => "To be added soon...",
    //   'rules' => "To be added soon...",
    //   'criteria' => "To be added soon...",
    //   'rewards' => "To be added soon...",
    //   'event_id' => 9
    // ]);
  }
}
