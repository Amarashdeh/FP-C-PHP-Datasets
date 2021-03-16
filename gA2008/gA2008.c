int gA2008(int a, int b){
	int y = 0;
	if (a == 0)
	{
		int y = b;
	}
	else
	{
		while( b!= 0 )
		{
			if ( a > b )
			{
				a = a - b;
			}
			else
			{
				b = b - a;
			}
		}

		int y = a;
	}
	return y;
}-