
<!DOCTYPE html>
<html>

<head>
    <title>The Tea Times | Call and Response</title>
    <meta charset="UTF-8">
    <meta lang="english">

    <link href="styles/reset.css" rel="stylesheet">
    <link href="styles/layout.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>The Tea Times</h1>
        <nav>
            <a href="index.html#">Home</a>
            <a href="index.html#">Articles</a>
            <a href="index.html">Call and Response</a>
            <a href="index.html#">Contact Us</a>
        </nav>
    </header>
    
    <main>
        <h2>Call and Response</h2>
        <p>
            Welcome to "Call and Respone." Where we ask you, the reader, about your
            thoughts on what has happened in the world. Read the short article below
            then comment your insights. All are invited to respond based on their
            own education and experience.
        </p>

        <h3>Parent Britain Punishes Disobedient Sons of Liberty for Tea Party</h3>

        <div id="portrait_sam">
            <img src="images/samuel_adams_portrait.jpg" alt="Portrait of Samuel Adams" width="200">
            <figcaption>Sam Adams engd. by<br>W. G. Jackman </figcaption>
        </div>

        <p>
            A key event in the History of the United States was the Boston Tea Party.
            The American colonies were established to oppurtunities for economy,
            religious freedom, and political liberty. Over the course of several
            decades, England gradually increased their hold and authority to exploit
            those economic purposes. One such method was the passing of the Townshend
            Acts. These increased taxes on the colonists, enforced trade regulations,
            punished New Yorkers, and established Parlimant to have the ablity to tax
            the colonies. Ultimatly, this and other acts lead many people to grow
            weary or resentful of their government.
        </p>
        <p>
            On December 16th, 1773, the Sons of Liberty, led by Samuel Adams,
            having enough of Britain's tyranical rule, struck back. In the evening,
            a group of 30 to 130 men illegaly boarded three shipping vessels containing
            tea. Over the course of the next three hours, they dumped 342 containers of
            tea into the water. This amounted to £9,659 (equivalent to £1,550,322 in
            2023 or $1,700,000 today) in damages to the British East India Company
            ultimatly leading the British government to consider this an act of treason.
        </p>
        <p>
            Shortly after this event, a second refusal of tea shipments occured on the
            December 25th, 1773 just 9 days later. The Philidelphia Tea Party saw a
            more peaceable, yet equally firm, protest. The ship Polly was forbidden to
            be unloaded and sent back to England with the same cargo. This likely stop
            tea from being sent to Boston and encourged colonies to support Massachusetts.
        </p>
        <p>
            The following year in 1774, Britain passed five laws called by the colonies
            as the "Intolerable Acts." Each was aimed to punish Massachusetts for the 
            Boston Tea Party. These aggresive acts are considered to be a key development
            in starting the American Revolutionary War.
        </p>

        <h4>Questionnaire:</h4>

        <form action="feedback.php" method="post">
            <p><strong>Account Name:</strong> <em>(Optional)</em></p>
            <input type="text" name="name">

            <p><strong>Question 1:</strong><br>
                &nbsp;&nbsp;&nbsp;What was and wasn't appropriate in the actions of the
                Sons of Liberty?
            </p>
            <textarea name="question1" required rows="6" cols="53"></textarea>

            <p><strong>Question 2:</strong><br>
                &nbsp;&nbsp;&nbsp;How may you have acted if you were in their shoes?
            </p>
            <textarea name="question2" required rows="6" cols="53"></textarea>

            <p><strong>Question 3:</strong><br>
                &nbsp;&nbsp;&nbsp;As a Parliament member, how would you have responded?
            </p>
            <textarea name="question3" required rows="6" cols="53"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>

        <h4>Comments:</h4>

        <?php
        $document_root = $_SERVER['DOCUMENT_ROOT'];
        $comments= file("comments.txt");
    
        // count the number of comments in the array
        $numComments = count($comments);
        
        if ($numComments == 0) {
            echo "<p>No comments to display. Be the first!</p>";
        }
    
        // Seperates each \t seperate element from comments.txt to a new line and displays to the webpage
        for ($i = 0; $i < $numComments; $i++) {

            $line = explode("\t", $comments[$i]);

            echo "<div class='comments'>",
                "<h5>".$line[0]."</h5>",
                "<h6>".$line[1]."</h6>",
                "<p>".$line[2]."</p>", 
                "<p>".$line[3]."</p>",
                "<p>".$line[4]."</p>",
                "</div>";
        }
        ?>
    </main>
</body>
</html>