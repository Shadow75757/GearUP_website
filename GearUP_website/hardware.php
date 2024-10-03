<?php
include_once "header.php";
?>
<div class="carb">
    <div class="main">
        <div class="main__container">
            <div class="main__content">
                <h1>HARDWARE SECTION</h1>
                <p>Check out our technologies</p>
            </div>
            <div class="main__img-container">
                <img id="main__img" src="#" />
            </div>
        </div>
    </div>
    <div class="index-box" id="index-box">
        <div class="box">
            <form style="position: absolute">
                <h2>
                    <div class="container">
                        <b style="color: #ff0000;
                              letter-spacing: 0.2em;
                              font-size: 45px;
                              padding: 116px;">Index</b>
                    </div>
                </h2>
                <ul class="indx">
                    <li class="listing"><a href="#1">How it started</a></li>
                    <li class="listing"><a href="#2">The kit's reborn</a></li>
                    <li class="listing"><a href="#3">Wired for success</a></li>
                    <li class="listing"><a href="#4">Unleash the JoyStick</a></li>
                    <li class="listing"><a href="#5">In maintence</a></li>
                    <!-- Add more list items here -->
                </ul>
            </form>
        </div>
    </div>
    <div class="main__content">
        <div class="anim">
            <div class="container" id="1">
                <h1>How it started</h1>
                <p>When we started the project, the GearUP group consisted of 4 members. The familiar ones, Henrique and
                    Gustavo, and in addition to them, Miguel Luiz and Nathan Garcia, the developers of the <span style="background:
                    linear-gradient(to bottom, #f9a424 35%, #05a751 100%);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;">FryDay</span>
                    project.</p>
                <p>However, due to legal reasons, the group had to separate, but we continue to support each
                    other both in project development and sponsorships.</p>

                <p>Initially, ideas for hardware projects emerged,
                    such as a target shooting game with a laser gun and a target that had an infrared sensor. Something
                    like when the user pulled the trigger, the gun would release a laser beam, and the sensor
                    would calculate how close it was to the center of the target, determining the score. However, this
                    idea was abandoned because it wasn't 100% original and had been previously attempted without
                    success.</p>

                <p>Nonetheless, the group opted for other options. Another idea the group considered was
                    programming a robotic hand, but due to a low budget, the idea was quickly abandoned, as it required
                    motors, hydraulic suspensions, and other expensive materials.</p>

                <p>Additionally, we also thought about an
                    extremely complex escape room game with completely out-of-the-box puzzles, such as Caesar ciphers,
                    references to specific book pages, ASCII, hidden clues in metadata, something along the lines of the
                    "cicada 1337" puzzles.</p>

                <p>We also thought about a game that was not controlled by the user. This game
                    is a modern adaptation centered around a competition among artificial neural networks based on NEAT
                    (NeuroEvolution of Augmenting Topologies). NEAT employs a genetic algorithm to evolve neural
                    networks with diverse structures, starting from a basic foundation and progressively incorporating
                    complexity.</p>

                <p>The networks are evaluated based on their performance in specific tasks or problems.
                    NEAT introduces innovative concepts such as adding and removing nodes and connections within the
                    network during the evolutionary process, enabling it to handle both gradual and more significant
                    changes in network architecture.</p>

                <p>In this game, there are two distinct networks: one representing the game itself and the other
                    embodying the player. Both networks are artificial intelligences belonging to successive
                    generations. Each generation competes to attain excellence, with only the top 10 networks
                    progressing further. These networks undergo mutations and generate subsequent generations, repeating
                    this cycle, and once again, only the best 10 networks move forward. This iterative process emulates
                    an evolution.</p>

                <p>The same evolutionary process applies to the network controlling the player and the one governing
                    the game. Ultimately, both networks engage in a competition against each other. The network
                    controlling the player improves its abilities to overcome obstacles, while the network controlling
                    the game adapts to intensify the challenge for the user. This dynamic creates new hurdles and
                    strategies, preventing the user from easily winning.</p>

                <p>This game yields remarkable AI outcomes because, in situations where a viable solution is not
                    readily apparent, the networks exploit inherent glitches within the game mechanics, such as
                    exploiting hitboxes, to overcome the obstacles and progress further.</p>

                <p>Finally, we had the idea
                    of a game controller using an Arduino. Before explaining the hardware development, we want to thank
                    to <a href="https://www.vedantesdoporto.pt"><u>Vendantes do Porto</u></a> for providing essential
                    materials and Delmar Ribeiro for delivering the
                    not functional steering wheel and pedals kit and trusting our abilities and skills to fix it. We
                    also owe a great gratitude to Professor Antonio Barbosa and Luis Miguel for assisting us with
                    everything
                    related to Arduino.</p>
            </div>
            <div class="container" id="2">
                <h1>The kit's reborn</h1>
                <p>When we received the steering wheel, it was full of dust, cobwebs,
                    and even insects because it hadn't been used for a really long time. We started by completely
                    disassembling
                    it and thoroughly cleaning every detail.</p>

                <p>We identified the main errors and problems and started to
                    devise how to fix them. Both the pedal potentiometers and the wheel potentiometers were damaged and
                    burned, which led to their imminent replacement.</p>

                <p>The kit initially worked wirelessly with a receiver that
                    connected to the PS2, but we chose to make a wired connection to eliminate the need for a battery on
                    the Arduino.After an excellent precision cutting work and a
                    manual finishing with a half-round file, we used a VGA cable due to its characteristics, especially
                    being multi-wired and
                    containing the 9 wires (3 for each potentiometer, namely 5V, ground, and data transmission).</p>

                <p>We also
                    chose this type of cable because of its resistance, as it is coated with a thick layer of rubber,
                    followed by a mesh of aluminum filaments and a plastic coating accompanied by a fabric coating.
                    Considering the thickness of the cable, we had to file down its entry a bit.</p>

                <p>After soldering the new
                    cable and potentiometers and performing simple cable management to reduce the possibility of strain,
                    we had our first functional version of the pedals.</p>

                <p>Initially, since the game was not 100% developed
                    yet, we chose to test it on a website that helped us throughout the project, GamePad-tester.com. We
                    also tested it on Need for Speed Heat and Raceroom Racing Experience (due to their realism and
                    various input options).</p>

                <p>Need for Speed had interesting mechanics and was the easiest to drive, but
                    in terms of button customization, it was not as good because it didn't even have compatibility with
                    potentiometers.</p>

                <p>On the other hand, Raceroom had various customization options but was more difficult
                    to control due to its realism. The wheel consisted of 6 processing boards. Two of them were for the
                    R1 and R2 buttons, and the other two for the L1 and L2 buttons.</p>

                <p>There were two more boards for the
                    default PlayStation buttons (X, square, circle, and triangle) and the analog stick. Finally, there
                    was a board that contained 2 LEDs and 3 game control buttons (start, select, and mode).</p>

                <p>All of these
                    boards were interconnected to a main board where all the information processing was done. This board
                    was also connected to the shift paddles located at the back of the wheel, along with their
                    respective 2 boards.</p>

                <p>Finally, only a set of wires connected the wheel potentiometer and the area
                    where the circuit boards were stored. We started by removing the battery compartment since we would
                    use the cable as a means of data transmission and power supply. Then, with the help of a multimeter,
                    we tested all the button connections and found that 68.7% of them didn't work due to poor contact
                    and damaged wires.</p>

                <p>We had to unsolder and resolder all the connections using single-strand copper
                    wires to increase their resistance. We obtained these wires from an electrical box provided by
                    <a href="https://www.vedantesdoporto.pt"><u>Vendantes do Porto</u></a> (we take this opportunity to
                    thank them again :D ).
                </p>

                <p>We reinforced the connections
                    with electrical tape, although it slightly affected the presentation, we felt that long-term
                    durability was more important than appearance because, after all, who wants something beautiful that
                    doesn't work?</p>

                <p>We then tested some buttons for the first time using an Arduino Uno, but considering
                    that it only has 13 digital inputs (excluding 0 and 1, which are used for receiving and transmitting
                    data), it wasn't enough for our total of 20 inputs. So we immediately realized that we would need an
                    Arduino Mega.</p>
            </div>
            <div class="container" id="3">
                <h1>Wired for success</h1>
                <p>During these previous stages of the project, the computer still recognized the Arduino
                    as an external board, and it was not possible to use potentiometer values to control anything.
                    Therefore, we had to use an Arduino library called UNOJOY-MASTER, which concatenated functional
                    codes for Uno, Leonardo, and Mega Arduinos.</p>

                <p>Initially, we used UNOJOY to correctly recognize the
                    board by the machine. UnoJoy is an open-source code library that allows transforming an Arduino
                    board into a recognized USB gaming device by the computer.</p>

                <p>This library offers a straightforward
                    interface for programming the Arduino as a joystick, allowing you to create custom controllers for
                    computer games. UnoJoy's functionality is based on a technique called USB device emulation. With the
                    UnoJoy library, you can configure the connected Arduino board to emulate a joystick.</p>


                <p>The UnoJoy process involves two main steps. First, you need to upload the appropriate code to the
                    Arduino board. This includes including the UnoJoy library and defining the necessary parameters,
                    such as the number of buttons, axes, and other control elements that the joystick will have. You can
                    easily find examples and templates online, which you can edit to match your specific needs. These
                    configurations vary depending on the project and the specific requirements of the game.</p>

                <p>Once the code is uploaded to the Arduino board, you can connect it to a computer using a USB cable.
                    The computer will recognize the board as a joystick, allowing you to configure and use it in
                    compatible games. The UnoJoy library provides various functions and commands that can be used to
                    control the joystick's buttons and axes. For example, you can define the state of buttons as pressed
                    or released (with values 1 and 0), as well as specify the position of the axes (using a
                    potentiometer ranging from -1.000000 to 1.000000).</p>

                <p>This information is sent to the computer via the
                    USB connection, enabling the game to interpret the joystick commands and respond quickly and
                    efficiently.</p>

                <p>The process of turning the Arduino into a game controller used to be relatively simple. First, we
                    opened the Arduino IDE and loaded the UnojoyArduinoSample.ino file (a file extension used for
                    software programs developed for use with Arduino). After analyzing the code, we connected the
                    Arduino to the PC via USB and uploaded the code.</p>

                <p>What the code did was overwrite the Arduino's ROM
                    (read-only memory), effectively erasing its original identification. Then, we put the Arduino into
                    DFU mode (Device Firmware Upgrade) by shorting the two ground and reset pins located near the
                    USB/jack input. DFU mode makes the device vulnerable to receive new software updates. In this case,
                    we executed a script that forced it to be recognized as a game controller by running a .bat file
                    called TurnIntoAJoystick.bat.</p>
            </div>
            <div class="container" id="4">
                <h1>Unleash the JoyStick</h1>
                <p>This .bat file is a batch script (a text file containing lines with commands that can be executed
                    sequentially by the Windows command interpreter) that enables the firmware update of an Arduino Uno
                    board to be recognized as a joystick, using the UnoJoy library.</p>

                <p>The purpose of the code is to
                    automate the process of updating the firmware of the Arduino Uno, enabling its functionality as a
                    joystick. The code checks for the presence of another script called "batchisp.exe" (contained in the
                    MASTER folder) and executes a series of commands to perform the firmware update.</p>

                <p>The process is
                    divided into two steps. First, it checks if the "batchisp.exe" program is present in the specified
                    directory. If not, the script displays an error message and terminates. Then, the code proceeds with
                    the firmware update. It switches to the appropriate directory and executes the "batchisp" command
                    with the correct arguments to update the firmware of the Arduino Uno.</p>

                <p>This is done using the
                    "UnoJoy.hex" file as the source for the update. For context, the .hex file format is used in Arduino
                    programming to write and update firmware in the ROM memory. It contains binary data in hexadecimal
                    format that describes the compiled program instructions.</p>

                <p>The .hex file is processed by programming
                    tools to load the instructions into the microcontroller's ROM memory, allowing the execution of the
                    firmware and the functioning of the Arduino. It is essential for ROM programming and enables the
                    execution of different programs on the Arduino.</p>

                <p> After the update, the code checks if the operation was successful by examining the error code
                    returned by the previous execution. If the error code is zero, the update was completed
                    successfully. Otherwise, the code proceeds to the next step. If the first step was not successful,
                    the code moves on to a second update step specific to the Arduino Uno R3 model. It again executes
                    the "batchisp" command, using the atmega16u2 chip and following the same steps described earlier.
                </p>

                <p>After the update, it performs another success check and displays a message indicating that you need
                    to disconnect and reconnect the Arduino for it to be recognized as a joystick.</p>

                <p>We connected the three pins of a potentiometer to the Arduino, respectively to 5 volts, ground, and
                    analog 0, and tested the UnoJoy for the first time. In the Windows calibration tool, we noticed that
                    the potentiometer, which we connected to the X-axis controller, caused the line to oscillate from
                    left to right when x=0.</p>

                <p>Perfect! Now, we needed to connect two more potentiometers, which involved
                    editing the code to add this possibility. It was as simple as copying and pasting the same line
                    three times, changing the variable name and modifying the analog input where it should receive the
                    information. However, this step gave us one of the biggest headaches of the entire project.</p>

                <p>Previously, we had rewritten the Arduino's ROM, which caused the computer to no longer recognize it
                    as an Arduino. In other words, it was impossible to send new code to the Arduino because it was
                    constantly stuck in "transmitting mode," and it was not recognized by the PC or the Arduino IDE. We
                    searched through countless forums without finding a solution on how to revert the process. Until we
                    remembered to download the original Arduino hex file to somehow force it to overwrite the UnoJoy
                    code and return it to its Arduino state.</p>

                <p>To do this, we downloaded an application called Atmel FLIP
                    3.4.7. Atmel FLIP 3.4.7 is a program developed by Atmel that allows firmware updates on Atmel's AVR
                    (Advanced Virtual RISC, where RISC stands for Reduced Instruction Set Compute) microcontrollers. It
                    provides a user-friendly interface for programming the devices, simplifying the process of writing
                    or updating firmware. You can select the target device, load the firmware file in .hex format, and
                    program the microcontroller.</p>

                <p>Additionally, the program offers features such as verifying the
                    programmed content and the option to reset the device after programming. We uploaded the .hex file
                    and used the Brute Force mode to erase the old firmware code and rewrite it with the updated Arduino
                    Uno firmware.</p>
                <p>We continued with the tests and tried to complete as much code as possible before sending it to the
                    Arduino to avoid going through the process repeatedly, as it could overload the microcontroller.
                    However, during our research, we obtained a file that could revert the process, functioning in the
                    exact same way as the TurnIntoAJoystick.bat but for reversing the process. We only needed to short
                    the ground and reset pins and execute the .bat file to restore the Arduino to its normal state.</p>

            </div>
            <div class="container" id="5">
                <h1>idk yet</h1>

                <p>Eventually, after numerous tests, we reached a point where we needed to perform final tests with all
                    the buttons and ensure that multiple connections were functioning simultaneously. We made minor
                    adjustments to the code, and our steering wheel was almost ready.</p>
            </div>
        </div>
    </div>
    <script src="js/paragraph-fade.js"></script>
    <?php
    include_once "footer.php";
    ?>

    <script src="app.js"></script>
    </body>

    </html>