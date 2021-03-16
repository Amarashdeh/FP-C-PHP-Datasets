int fcB2002(int a, int b, int c)
{
	int result = 0;
	if (c > b)
	{
		if (b > a)
		{
			result = 1;
			int t = a + b;
			if (t < c)
			{
				result = 2;
				int t2 = a * b;
				if (((t2 - c) <= 5) && ((t2 - c) >= 0))
				{
					result = 3;
				}
			}
			else
			{
				result = 4;

			}
		}
	}
	return result;
}