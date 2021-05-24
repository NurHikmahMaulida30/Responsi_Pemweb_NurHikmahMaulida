<?php
session_start();

session_destroy();
echo "<script>
            alert('Anda telah keluar dari halaman website');
            document.location.href = 'index.html';
        </script>";
?>