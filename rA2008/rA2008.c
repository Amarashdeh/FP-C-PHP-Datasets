int rA2008(int a, int d){
	int y =0;
	if ( d == 0 )
	{
		int y = 0;
	}
	else
	{
		if ( a < d )
		{
			int y = a;
		}
		else
		{
			while ( a >= d )
			{
				a = a - d;
			}
			int y = a;
		}
	}
	return y;
}