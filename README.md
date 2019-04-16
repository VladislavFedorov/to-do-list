# TODO List

<h2>How to start use it</h2>

<h3>GitHub</h3>
    <p>Clone repo.</p>
<ul>
    <li>git clone https://github.com/VladislavFedorov/todo-list.git</li>
</ul>

<h3>MySQL</h3>
<p>Use this commands to create a MySQL database and table:</p>
<ul>
    <li>CREATE DATABASE todolist;</li>
    <li>CREATE TABLE todo (id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, todoTitle VARCHAR(200), todo TEXT(255), date DATETIME);</li>
</ul>

<h3>Connection.php</h3>
    <p>Use your server data for connection.</p>
    <p>Edit constants: "hostname", "username", "password", "database" and variable "table" with your data.</p>
    
<h2>More information</h2>

<ul>
    <li>It's work without users registration;</li>
    <li>You can add, edit and delete notes;</li>
    <li>It has a nice view (thanks to the Bootstrap framework).</li>
</ul>
