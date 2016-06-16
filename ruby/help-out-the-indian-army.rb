arr = gets.chomp.strip.split(' ').map(&:to_i)

n = arr[0]
start = arr[1]
sd = arr[2]

input = []

n.times do
  temp = gets.chomp.strip.split(' ').map(&:to_i)
  input << [(temp[0] - temp[1]), (temp[0] + temp[1])]
end

data = input.sort

#print data

diff = 0

data.each do |temp_arr|
  s = temp_arr[0]
  e = temp_arr[1]
  break if s >= sd
  if s > start
    diff += s - start
    start = e
  elsif start >= s &&  start <= e
    start = e
  else
  end
  break if e > sd
end

diff += (sd - start) if start < sd

puts diff