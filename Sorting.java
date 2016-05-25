import java.util.*;
class Sorting
{
	public static void main(String arg[])
	{
		int i,j,size;
		Scanner input = new Scanner(System.in);
		System.out.println("Enter the total number of Strings to sort");
		size = input.nextInt();
		String name[] = new String[size];
		System.out.println("Enter the Strings to sort");
		for(i=0;i<size;i++)
		{
			name[i] = input.next();
		}
		String temp = null;
		for(i=0;i<size;i++)
		{
			for(j=i+1;j<size;j++)
			{
				if(name[j].compareTo(name[i])<0)
				{
					temp = name[i];
					name[i] = name[j];
					name[j] = temp;
				}
			}
		}
		System.out.println("\n");
		System.out.println("Sorted List");
		for(i=0;i<size;i++)
		{
			System.out.println(name[i]);
		}
	}
}

