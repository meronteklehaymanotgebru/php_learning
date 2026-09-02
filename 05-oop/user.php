class User
{
    public string $name;
    public string $role;

    public function introduce(): void
    {
        // Print:
        // "My name is Mery and I am a Developer"
    }
}
$user = new User();

$user->name = "Mery";
$user->role = "Developer";

$user->introduce();