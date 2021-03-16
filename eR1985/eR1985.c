int eR1985(int x, int y){
        int power = 0;
        if (x >= 0)
        {
                power = y;
        }
        else
        {
                power = -y;
        }
        int z = 1;
        while (power != 0)
        {
                z = z * x;
                power = power - 1;
        }
        if (y < 0)
        {
                z = 1 / z;
        }
        z = z + 1;
        return z;
}