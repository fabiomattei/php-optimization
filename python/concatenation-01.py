import timeit
import tracemalloc

tracemalloc.start()
start = timeit.default_timer()

stringa = '';
for a in range(1000000):
	stringa = stringa + 'String concatenation. '



stop = timeit.default_timer()
print('Time: ', stop - start)

print(tracemalloc.get_traced_memory())
tracemalloc.stop()  
