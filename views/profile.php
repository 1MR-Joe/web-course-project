<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Profile Page</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <?php include __DIR__ . '/../components/header.php' ?>

    <main>
        <div class="container">
            <h2>Personal Info</h2>
            <div class="profile-layout">
                <form class="profile" action="/profile" method="post">
                    <div class="form_attributes">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="name" placeholder="John Doe" required value="<?php echo $user['name'] ?? 'John Doe' ?>">
                    </div>
    
                    <div class="form_attributes">
                        <label for="telephone">Phone Number</label>
                        <input
                            type="tel"
                            pattern="[0-9]{11,}"
                            minlength="11"
                            maxlength="15"
                            required
                            placeholder="Enter at least 11 digits"
                            id="telephone"
                            name="phone"
                            value="<?php echo $user['phone'] ?? "Enter at least 11 digits" ?>"
                        />
                    </div>
    
                    <div class="form_attributes">
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="" disabled selected>Select your gender</option>
                            <option value="male" <?php if(strtolower($user['gender']) == 'male') echo "selected" ?>>Male</option>
                            <option value="female" <?php if(strtolower($user['gender']) == 'female') echo "selected" ?>>Female</option>
                        </select>
                    </div>
    
                    <div class="form_attributes">
                        <label for="email">Email</label>
                        <input
                            type="email"
                            required
                            placeholder="example@gmail.com"
                            id="email"
                            name="email"
                            value="<?php echo $user['email'] ?? "example@gmail.com" ?>"
                        />
                    </div>
    
                    <div class="submit_and_cancel">
                        <input type="button" value="Cancel" class="cancel">
                        <input type="submit" value="Save" class="submit">
                    </div>
                </form>
    
                <div class="profile-picture">
                    <img src="/images/avatars/avatar.png" alt="Profile Picture" id="profile-img">
                    <input type="file" id="upload-btn" accept="image/*">
                </div>
            </div>
        </div>
    </main>
    
    <?php include __DIR__ . '/../components/footer.php' ?>
</body>
</html>
