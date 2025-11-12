<?php
include 'views/header.php';
?>

<h2>Statistik Karyawan Berdasarkan Masa Kerja</h2>

<?php if ($tenure_stats->rowCount() > 0): ?>
<table class="data-table">
    <thead>
        <tr>
            <th>Level Pengalaman</th>
            <th>Jumlah Karyawan</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = $tenure_stats->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['experience_level']); ?></td>
            <td><?php echo htmlspecialchars($row['total_employees']); ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php else: ?>
<p>Tidak ada data masa kerja yang tersedia.</p>
<?php endif; ?>

<?php
include 'views/footer.php';
?>