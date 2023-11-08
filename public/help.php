<?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/CSS/main.css">
    <title>Inventory Manager | Help</title>
    <meta name="discription" content="In this page you can find helpfull guides on how to navagate the web application.">
</head>
<body>
    <div class="dashboard-container">
        <?php include_once '../include/navbar.php'; ?>
        <main class="main-content">
            <h1>Help</h1>
            <div class="insert-help">
                <h2>Insert new Data</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Libero totam molestias repellat veniam est temporibus ipsam nulla adipisci sint enim natus beatae,
                    necessitatibus quaerat a nihil asperiores possimus et maxime!
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Porro, iste exercitationem deserunt quae vitae a mollitia laborum, adipisci labore ducimus dolore.
                    Quibusdam eos temporibus vitae distinctio. Facilis dolor quasi laudantium!
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Voluptate nihil aliquam laborum mollitia nesciunt enim deserunt consequatur laudantium ducimus dicta!
                    Possimus tenetur corrupti reprehenderit tempora aliquid non saepe nihil? Recusandae?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Cum ipsum provident esse laborum doloremque commodi aperiam dolores deleniti corporis sed omnis recusandae id ad natus ex,
                    iure aliquid enim exercitationem.
                </p>
            </div>
            <div class="edit-help">
                <h2>Edit Data</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iste exercitationem tenetur,
                    doloribus maxime voluptas fugit perferendis soluta repellendus minus quo animi illum,
                    eligendi cum quibusdam! Sed recusandae in quod numquam.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur distinctio molestiae quasi soluta ea corporis tenetur minima odio iusto,
                    sapiente voluptas eveniet, culpa nam voluptates maiores sequi sed eligendi. Eius!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Tempora expedita,
                    assumenda ut itaque enim optio consequatur accusantium nam soluta voluptatem at adipisci beatae sed numquam praesentium,
                    repellendus magni explicabo ea!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, doloremque at!
                    Perspiciatis recusandae maxime nulla eaque.
                    Sit, obcaecati? Obcaecati corporis itaque optio soluta voluptates labore,
                    blanditiis totam ipsam odio accusamus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Perspiciatis esse recusandae maiores corrupti! Ipsam,
                    magni autem aut eligendi dolores officiis impedit sit quibusdam culpa!
                    Natus beatae itaque magni ex aperiam.
                </p>
            </div>
            <div class="morespace-help">
                <h2>Collapse Sidebar</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Voluptates numquam asperiores sapiente ipsa nesciunt exercitationem accusantium ipsam voluptatum ratione,
                    quaerat, voluptatibus laudantium id at saepe explicabo nobis alias reprehenderit sunt.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quibusdam quaerat consequuntur consectetur voluptatem ad cumque!
                    Incidunt quibusdam, quas suscipit ipsum, dolore,
                    quis mollitia cupiditate ab officia dolores placeat tempora a.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Recusandae, rem dolores consequuntur, amet nemo id,
                    dolorem labore maxime sint velit officiis odit possimus magnam voluptates eaque quod!
                    Doloremque, veritatis officia!
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Itaque necessitatibus, accusamus est dolores,
                    harum ea laudantium laborum possimus facilis dolor sit deserunt cupiditate ab voluptatibus sequi ipsa repellendus at hic!
                </p>
            </div>
            <?php include_once '../include/footer.php'; ?>
        </main>
    </div>
</body>
</html>