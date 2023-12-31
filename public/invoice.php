<?php
require_once '../src/inc/session_check.php';

$sql = "SELECT *, `invoices`.`id` as `invoice_id`, `invoices`.`created` AS `invoice_created` FROM invoices
INNER JOIN invoice_status ON invoices.status=invoice_status.id
INNER JOIN customers ON invoices.customer_id=customers.id
INNER JOIN users ON invoices.user_id=users.id ORDER BY updated DESC";

$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Manager | Orders</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="../assets/CSS/main.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include_once '../src/inc/navbar.php'; ?>
        <main class="main-content">
            <h1>Invoices</h1>
            <a class="new-data" href="createInvoice.php">Create invoice</a>
            <div class="table-container">
                <table aria-label="">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Customer</th>
                            <th>Last Updated</th>
                            <th>Created</th>
                            <th>Last interacted</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $row['invoice_id']; ?>
                                </td>
                                <td>
                                    <?php echo $row['status']; ?>
                                </td>
                                <td>
                                    <?php echo $row['first_name'] . ' ' . $row['last_name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['updated']; ?>
                                </td>
                                <td>
                                    <?php echo $row['invoice_created']; ?>
                                </td>
                                <td>
                                    <?php echo $row['username'] ?>
                                </td>
                                <td>
                                    <a class="edit-data"
                                    href="editInvoice.php?id=<?php echo $row['invoice_id']; ?>">Edit</a>
                                    <a class="view-data"
                                    href="view-invoice.php?id=<?php echo $row['invoice_id']; ?>">View</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </main>
    </div>
</body>

</html>
