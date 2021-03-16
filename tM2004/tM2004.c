int tM2004(int a, int d, int c){
	int type = 0;
	if(a == d)
	{
		if(d == c)
		{
			type = 1;
		}
		else
		{
			type = 2;
		}
	}
	else{
		if(d == c)
		{
			type = 2;
		}
	}
	if (pow(a,2) == (pow(d,2) + pow(c,2)))
	{
		type = 3;
	}
}