arr = gets.chomp.strip.split(' ').map(&:to_i)

test_cases = gets.chomp.strip.to_i

input = []

max = 1
test_cases.times do
  tmp = gets.chomp.strip.to_i
  max = tmp if tmp > max
  input << tmp
end

a = arr[0]
b = arr[1]
c = arr[2]
d = arr[3]
e = arr[4]
f = arr[5]

fn = []
gn = []
hn = []

fn[0] = arr[6]
fn[1] = arr[7]

gn[0] = arr[8]
gn[1] = arr[9]

hn[0] =  (e * fn[0]) + (f * gn[0])
hn[1] =  (e * fn[1]) + (f * gn[1])

hs = []

hs[0] = hn[0]
hs[1] = hn[0] + hn[1]


(2..max).each do |i|
  fn[i] = ( a * fn[i - 1] ) +  ( b * gn[i - 2] )
  gn[i] = ( c * gn[i - 1] ) +  ( d * fn[i - 2] )
  hn[i] = ( e * fn[i] ) + ( f * gn[i] )
  hs[i] = hs[i - 1] + hn[i]
end

out = []

input.each do |val|
  out << hs[val] % 1000000007
end

puts out

