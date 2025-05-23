function bevestigDelete()
{
    answer = confirm('Weet u zeker dat u dit record wilt verwijderen?');
    if (answer) {
        return true
    } else {
        return false;
    }
}