<?php
function url ($id)
{
    return "index.php?id=" . base64_encode($id);
}

function content()
{
$id_menu = base64_decode(@$_GET['id']);
switch ($id_menu) {
    case 1:
        include ('latihan1.php');
        break;

    case 2:
            include ('latihan2.php');
        break;
    case 3:
        echo 'Matakuliah';
        break;
    case 4:
        echo 'Nilai';
        break;
    default:
        echo 'Form belum ada..';
        break;
    }
}
?>

<table width="100%" height="100%" border="1">
    <tr height="5%">
        <td align ="center">
            <a href="<?=url(1); ?>">Mahasiswa </a>
            <a href="<?=url(3); ?>">Dosen </a>
            <a href="<?=url(3); ?>">Mata kuliah </a>
            <a href="<?=url(4); ?>">Nilai </a>
        </td>
    </tr>
    <tr height="95%">
        <td valign="top" align="center">
           <?=content(); ?>;
        </td>
    </tr>
</table>
