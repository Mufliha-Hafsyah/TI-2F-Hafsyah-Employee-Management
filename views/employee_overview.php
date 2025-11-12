<?php
include 'views/header.php';
?>

<h2>Ringkasan Karyawan Perusahaan</h2>

<?php if ($overview && $overview['total_employees'] > 0): ?>
<div class="dashboard-cards">
    <div class="card">
        <h3>Total Karyawan</h3>
        <div class="number"><?php echo number_format($overview['total_employees'], 0, ',', '.'); ?></div>
    </div>
    <div class="card">
        <h3>Total Budget Gaji Bulanan</h3>
        <div class="number">Rp <?php echo number_format($overview['total_salary_budget'], 0, ',', '.'); ?></div>
    </div>
    <div class="card">
        <h3>Rata-Rata Masa Kerja</h3>
        <div class="number"><?php echo $overview['avg_years_service']; ?> Tahun</div>
    </div>
</div>
<?php else: ?>
<p>Tidak ada data ringkasan karyawan yang tersedia.</p>
<?php endif; ?>

<?php
include 'views/footer.php';
?>