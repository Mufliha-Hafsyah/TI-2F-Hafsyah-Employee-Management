<?php
include 'views/header.php';
?>

<h2>Statistik Gaji per Departemen</h2>

<?php if ($stats->rowCount() > 0): ?>
<table class="data-table">
    <thead>
        <tr>
            <th>Departemen</th>
            <th>Rata-rata Gaji (Rp)</th>
            <th>Gaji Tertinggi (Rp)</th>
            <th>Gaji Terendah (Rp)</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $stats->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['department']); ?></td>
            <td>Rp <?php echo number_format($row['avg_salary'], 0, ',', '.'); ?></td>
            <td>Rp <?php echo number_format($row['max_salary'], 0, ',', '.'); ?></td>
            <td>Rp <?php echo number_format($row['min_salary'], 0, ',', '.'); ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php else: ?>
<p>Tidak ada data gaji yang tersedia.</p>
<?php endif; ?>

<?php
include 'views/footer.php';
?>